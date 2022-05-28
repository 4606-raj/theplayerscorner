<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Player;
use App\Models\User;
use Session, DB, DataTables, Response, Auth;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()) {
            $data = Player::with('user')->get();
            return DataTables::of($data)
                ->editColumn('name', function($data) {
                    return $data->user->name ?? 'NA';
                })
                ->editColumn('photo', function($data) {
                    return $data->user->photo ?? 'NA';
                })
                ->editColumn('captain', function($data) {
                    return $data->is_captain? 'Yes': 'No';
                })
                ->addColumn('action', function($data) {
                    $edit = route('players.edit', $data->id);
                    return "<a href='$edit' class='btn btn-warning'>Edit</a> <button data-id='$data->id' class='btn btn-danger delete-btn'>Delete</button>";
                })
                ->make(true);
        }

        return view('admin.players.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Team::all();
        return view('admin.players.create', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'short_bio' => 'required',
            'photo' => 'required',
            'squad_number' => 'required',
            'type' => 'required',
            'is_captain' => 'required',
            'team_id' => 'required',
        ]);

        if($request->hasfile('photo')) {
            $file = $request->photo;
            $name = time().'_'.$file->getClientOriginalName();
            $filePath = $file->storeAs('images/trainer-slider/', $name, 'public');

            $imageName = $name;
        }
        
        $user = \Arr::except($data, ['squad_number', 'type', 'is_captain', 'team_id']);
        $user['password'] = \Hash::make(\Str::random());
        $user['photo'] = $imageName;
        $player = \Arr::only($data, ['squad_number', 'type', 'is_captain', 'team_id']);
        $player['is_captain'] = $data['is_captain'] == 'on'? 1: 0;
        
        // dd($user);
        
        try {
            DB::beginTransaction();
            $user = User::create($user);
            $player['user_id'] = $user->id;
            Player::create($player);
            DB::commit();

            Session::flash('success', 'Player Added');
            return redirect()->route('players.index');
        }
        catch(\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
            Session::flash('error', $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Team::findOrFail($id);
        return view('admin.players.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required'
        ]);

        try {
            DB::beginTransaction();
            Team::whereid($id)->update($data);
            DB::commit();

            Session::flash('success', 'Team Updated');
            return redirect()->route('teams.index');
        }
        catch(\Exception $e) {
            DB::rollback();
            Session::flash('error', $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            Team::destroy($id);
            DB::commit();

            return Response::json(['message' => 'deleted'], 200);
        }
        catch(\Exception $e) {
            DB::rollback();
            Session::flash('error', $e->getMessage());
            return redirect()->back();
        }
    }
}
