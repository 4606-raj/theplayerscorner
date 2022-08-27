<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index() {
        return view('admin.gallery.index');
    }
}
