<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\PlayerController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\BlogController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::view('login', 'admin.login');

Route::get('/', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::resource('/players', PlayerController::class);
Route::resource('/gallery', GalleryController::class);
Route::group(['as' => 'admin.'], function() {

    Route::resource('/blogs', BlogController::class);
    Route::get('/comments/{blogId}', [BlogController::class, 'comments'])->name('comments');
    Route::delete('/comments/{commentId}', [BlogController::class, 'commentDestroy'])->name('blogs.comments.destroy');
});
