<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comment;

class BlogController extends Controller
{
    public function index() {
        $blogs = Blog::latest();
        if(!empty(request()->search)) {
            $blogs = $blogs->where('title', 'like', '%' . request()->search . '%');
        }
        $blogs = $blogs->paginate(12);

        $recentBlogs = Blog::latest()->limit(4)->select('title', 'id')->get();
        return view('blogs.index', compact('blogs', 'recentBlogs'));
    }

    public function show($id) {
        $blog = Blog::find($id);
        $recentBlogs = Blog::latest()->limit(4)->select('title', 'id')->get();

        return view('blogs.show', compact('blog', 'recentBlogs'));
    }

    public function storeComment(Request $request) {
        $request->validate([
            'comment' => 'required',
            'name' => 'required',
            'email' => 'required',
            'blog_id' => 'required|exists:blogs,id',
        ]);

        Comment::create($request->except('_token'));

        return redirect()->back()->with('success', 'Comment Added');
    }
}
