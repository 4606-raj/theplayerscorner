<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comment;

class BlogController extends Controller
{
    public function index() {
        $blogs = Blog::latest()->paginate(12);
        return view('blogs.index', compact('blogs'));
    }

    public function show($id) {
        $blog = Blog::find($id);

        return view('blogs.show', compact('blog'));
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
