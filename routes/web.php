<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/contact-us', [HomeController::class, 'contactUs'])->name('contact-us.submit');

// Route::view('/about-us', 'about-us')->name('about-us');
// Route::view('/community', 'community')->name('community');
// Route::view('/club-shop', 'club-shop')->name('club-shop');
Route::view('/contact-us', 'contact-us')->name('contact-us');
Route::view('/privacy-policy', 'legal-documents.privacy-policy')->name('privacy-policy');
Route::view('/company-details', 'legal-documents.company-details')->name('company-details');
Route::view('/digital-privacy', 'legal-documents.digital-privacy')->name('digital-privacy');
Route::view('/terms-of-use', 'legal-documents.terms-of-use')->name('terms-of-use');
Route::view('/privacy-preference', 'legal-documents.privacy-preference')->name('privacy-preference');
Route::view('/forgot-password', 'auth.forgot-password')->name('forgot-password');
Route::view('/confirm-email', 'auth.confirm-email')->name('confirm-email');

// Route::post('/contact', function (Request $request) {

//     Mail::to('0066.navi@gmail.com')->send(new \App\Mail\ContactMail);
//     return 'E-Mail Sent';
    
// })->name('contact');


Route::get('/artisan-migrate', function () {
    Artisan::call('migrate');
});

Route::get('/cache-clear', function () {
    Artisan::call('cache:clear');
});