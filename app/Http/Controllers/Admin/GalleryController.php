<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Session, DB, DataTables, Response, Auth, Validator;

class GalleryController extends Controller
{
    public function index() {

        if(request()->ajax()) {
            $data = Gallery::whereType(0)->get();
            return DataTables::of($data)
                ->editColumn('photo', function($data) {
                    $filename = url('storage/images/gallery/') . '/' . $data->name;
                    return "<img src='$filename' class='img-rounded w-50' alt='$data->name'>";
                })
                ->addColumn('action', function($data) {
                    return "<button data-id='$data->id' class='btn btn-danger delete-btn'>Delete</button>";
                })
                ->rawColumns(['photo', 'action'])
                ->make(true);
        }
        
        return view('admin.gallery.index');
    }

    public function create() {
        return view('admin.gallery.create');
    }
    
    public function store(Request $request) {
        $data = array();

        $validator = Validator::make($request->all(), [
             'file' => 'required|mimes:png,jpg,jpeg,pdf|max:2048'
        ]);

        if ($validator->fails()) {

            $data['success'] = 0;
            $data['error'] = $validator->errors()->first('file');// Error response

        }else{
             if($request->file('file')) {

                 $file = $request->file('file');
                 $filename = $file->getClientOriginalName();
                 
                 Gallery::create(['name' => $filename, 'type' => 0]);

                  // File upload location
                  $location = 'storage/images/gallery/';

                  // Upload file
                  $file->move($location,$filename);

                  // Response
                  $data['success'] = 1;
                  $data['message'] = 'Uploaded Successfully!';

             }else{
                   // Response
                   $data['success'] = 0;
                   $data['message'] = 'File not uploaded.'; 
             }
        }

         return response()->json($data);
    }

    public function destroy(Request $request, $id) {
        
        if($request->filename) {
            $filename =  $request->get('filename');
            Gallery::where('name', $filename)->delete();
        }
        else {
            $file = Gallery::find($id);
            $file->delete();
            $filename =  $file->name;
        }
        
        $path = public_path() . '/storage/images/gallery/' . $filename;
        
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename;  
    }
}
