<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use Session, DB, DataTables, Response;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()) {
            $data = Team::all();
            return DataTables::of($data)
                ->addColumn('action', function($data) {
                    $edit = route('teams.edit', $data->id);
                    return "<a href='$edit' class='btn btn-warning'>Edit</a> <button data-id='$data->id' class='btn btn-danger delete-btn'>Delete</button>";
                })
                ->make(true);
        }

        return view('admin.teams.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teams.create');
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
            'name' => 'required'
        ]);

        try {
            DB::beginTransaction();
            Team::create($data);
            DB::commit();

            Session::flash('success', 'Team Added');
            return redirect()->route('teams.index');
        }
        catch(\Exception $e) {
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
        return view('admin.teams.edit', compact('data'));
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
