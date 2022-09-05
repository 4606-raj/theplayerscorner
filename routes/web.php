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
Route::view('/after-contact-us', 'after-contact-us')->name('after-contact-us');
Route::view('/privacy-policy', 'legal-documents.privacy-policy')->name('privacy-policy');
Route::view('/company-details', 'legal-documents.company-details')->name('company-details');
// Route::view('/digital-privacy', 'legal-documents.digital-privacy')->name('digital-privacy');
Route::view('/terms-of-use', 'legal-documents.terms-of-use')->name('terms-of-use');
Route::view('/privacy-preference', 'legal-documents.privacy-preference')->name('privacy-preference');
Route::view('/forgot-password', 'auth.forgot-password')->name('forgot-password');
Route::view('/confirm-email', 'auth.confirm-email')->name('confirm-email');
// Route::view('/404', '404')->name('404');

// Pages for Club section
Route::view('/club', 'club')->name('club');
Route::view('/club-information', 'club-information')->name('club-information');
Route::view('/inclusion-diversity', 'inclusion-diversity')->name('inclusion-diversity');
Route::view('/sponsorship', 'sponsorship')->name('sponsorship');
Route::view('/social-media', 'social-media')->name('social-media');

Route::view('/community', 'community')->name('community');
Route::view('/about-us', 'about-us')->name('about-us');

Route::get('/test', function() {
    Mail::to('0066.navi@gmail.com')->send(new \App\Mail\ContactReceivedMail());
});

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

Route::get('/test', function () {
    $data1 = \App\Models\Gallery::select('id', 'name', \DB::raw('"gallery" as type'));
    $data2 = \App\Models\Team::select('id', 'name', \DB::raw('"team" as type'));

    dd($data1->union($data2)->paginate(2)->toArray());
});

