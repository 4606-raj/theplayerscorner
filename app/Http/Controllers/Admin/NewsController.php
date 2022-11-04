<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Session, DB, DataTables, Response;

class NewsController extends Controller
{
    public function index()
    {
        if(request()->ajax()) {
            $data = News::all();
            return DataTables::of($data)
                ->editColumn('url', function($data) {
                    return "<a href='$data->url' target='_blank'>$data->url</a>";
                })
                ->editColumn('photo', function($data) {
                    $filename = url('storage/images/news/') . '/' . $data->photo;
                    return "<img src='$filename' class='img-rounded w-25' alt='$data->photo'>";
                })
                ->addColumn('action', function($data) {
                    $edit = route('news.edit', $data->id);
                    return "<a href='$edit' class='btn btn-warning'>Edit</a> <button data-id='$data->id' class='btn btn-danger delete-btn'>Delete</button>";
                })
                ->rawColumns(['url', 'photo', 'action'])
                ->make(true);
        }

        return view('admin.news.index');
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'url' => 'required',
            'photo' => 'required'
        ]);

        try {
            DB::beginTransaction();

            if($request->file('photo')) {
                $filename = saveImage($request->file('photo'), 'storage/images/news/');
                $data['photo'] = $filename;
            }
            
            News::create($data);
            DB::commit();

            Session::flash('success', 'News Added');
            return redirect()->route('news.index');
        }
        catch(\Exception $e) {
            DB::rollback();
            Session::flash('error', $e->getMessage());
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $data = News::findOrFail($id);
        return view('admin.news.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'url' => 'required'
        ]);

        try {
            DB::beginTransaction();
            if($request->file('photo')) {
                $filename = saveImage($request->file('photo'), 'storage/images/news/');
                $data['photo'] = $filename;
            }
            News::whereid($id)->update($data);
            DB::commit();

            Session::flash('success', 'News Updated');
            return redirect()->route('news.index');
        }
        catch(\Exception $e) {
            DB::rollback();
            Session::flash('error', $e->getMessage());
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            News::destroy($id);
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
