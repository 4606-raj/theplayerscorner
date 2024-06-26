<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\BlogController;

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

// Teams section
Route::group(['prefix' => '/teams'], function() {
    Route::get('/types', [TeamController::class, 'indexTeamTypes'])->name('team-types');
    Route::get('/types/{id}', [TeamController::class, 'showTeamTypes'])->name('team-types.show');
    Route::get('{id}', [TeamController::class, 'show'])->name('teams-show');
});

// Route::view('/teams', 'teams')->name('teams');
Route::view('/mens-team', 'mens-team')->name('mens-team');
Route::view('/womens-team', 'womens-team')->name('womens-team');
Route::view('/youth-team', 'youth-team')->name('youth-team');
Route::view('/player-profile', 'player-profile')->name('player-profile');


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
Route::view('/testimonials', 'testimonials')->name('testimonials');

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blogs.show');
Route::post('/comments', [BlogController::class, 'storeComment'])->name('blogs.store-comment');

// Routes for Web App
Route::view('/user-type', 'user-type')->name('user-type');
Route::view('/user-login', 'auth.user-login')->name('user-login');


Route::get('/test', function() {
    Mail::to('0066.navi@gmail.com')->send(new \App\Mail\ContactReceivedMail());
});

Route::view('/player-registration', 'auth.player-registration')->name('player-registration');

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

// Route::view('test', 'test');
// Route::get('/test', [HomeController::class, 'index'])->name('home');