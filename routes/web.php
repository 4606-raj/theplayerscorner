<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;

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
Route::get('/locations-list/{postCode}', [HomeController::class, 'locationsList'])->name('locations-list');
Route::get('/get-current-step', [HomeController::class, 'getCurrentStep'])->name('get-current-step');

// Onboarding
Route::get('/register/{role}', [AuthController::class, 'create'])->name('register.role.create');
Route::post('/register/{role}', [AuthController::class, 'store'])->name('register.role.store');
Route::group(['middleware' => 'auth'], function() {

    Route::get('/player-registration', [AuthController::class, 'playerRegistrationForm'])->name('player-registration.create');
    Route::post('/step-one', [AuthController::class, 'stepOne'])->name('step-one');
    Route::post('/step-two', [AuthController::class, 'stepTwo'])->name('step-two');
    Route::post('/step-three', [AuthController::class, 'stepThree'])->name('step-three');
    Route::post('/step-four', [AuthController::class, 'stepFour'])->name('step-four');

    Route::view('/player-profile', 'players.profile')->name('player.profile');
});

Route::view('/mens-team', 'mens-team')->name('mens-team');
Route::view('/womens-team', 'womens-team')->name('womens-team');
Route::view('/youth-team', 'youth-team')->name('youth-team');
// Route::view('/player-profile', 'player-profile')->name('player-profile');


Route::view('/contact-us', 'contact-us')->name('contact-us');
Route::view('/after-contact-us', 'after-contact-us')->name('after-contact-us');
Route::view('/privacy-policy', 'legal-documents.privacy-policy')->name('privacy-policy');
Route::view('/company-details', 'legal-documents.company-details')->name('company-details');
Route::view('/terms-of-use', 'legal-documents.terms-of-use')->name('terms-of-use');
Route::view('/privacy-preference', 'legal-documents.privacy-preference')->name('privacy-preference');
Route::view('/forgot-password', 'auth.forgot-password')->name('forgot-password');
Route::view('/confirm-email', 'auth.confirm-email')->name('confirm-email');
Route::view('/404', 'errors.404')->name('404');

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
// Route::view('/user-type', 'user-type')->name('user-type');
// Route::view('/user-login', 'auth.user-login')->name('user-login');


// Route::view('/player-registration', 'auth.player-registration')->name('player-registration');


// Artisan calls
Route::get('/artisan-migrate', function () {
    Artisan::call('migrate');
});

Route::get('/cache-clear', function () {
    Artisan::call('cache:clear');
});