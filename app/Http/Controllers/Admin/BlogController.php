<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Blog, Comment};
use Session, DB, DataTables, Response;

class BlogController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index', compact('blogs'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('admin.blogs.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'category' => 'required',
            'content' => 'required',
        ]);

        if($request->hasFile('cover')) {
            $fileName = saveImage($request->cover, 'storage/images/blog-covers/');
            $request->merge(['cover_image' => $fileName]);
        }
        
        Blog::create($request->except('cover'));

        return redirect()->route('admin.blogs.index')->with('success','Blog created successfully.');
    }

    // Display the specified resource.
    public function show(Blog $blog)
    {
        return view('admin.blogs.show',compact('blog'));
    }

    // Show the form for editing the specified resource.
    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit',compact('blog'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        if($request->hasFile('cover')) {
            $fileName = saveImage($request->cover, 'storage/images/blog-covers/');
            $request->merge(['cover_image' => $fileName]);
        }

        $blog->update($request->except('cover'));

        return redirect()->route('admin.blogs.index')
                        ->with('success','Blog updated successfully');
    }

    // Remove the specified resource from storage.
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return Response::json(['message' => 'Blog deleted successfully']);
    }

    public function comments($blogId) {
        $comments = Blog::findOrFail($blogId)->comments;
        return view('admin.blogs.comments', compact('comments'));
    }

    public function commentDestroy($commentId) {
        Comment::findOrFail($commentId)->delete();
        return Response::json(['message' => 'Blog deleted successfully']);
    }
    
}