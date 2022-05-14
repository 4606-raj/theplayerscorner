<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
})->name('home');

Route::view('/about-us', 'about-us')->name('about-us');
Route::view('/contact-us', 'contact-us')->name('contact-us');

Route::post('/contact', function (Request $request) {

    Mail::to('0066.navi@gmail.com')->send(new \App\Mail\ContactMail);
    return 'E-Mail Sent';
    
})->name('contact');
