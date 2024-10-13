<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController, ShopifyAppController };
use App\Http\Controllers\Auth\{RegisterController , LoginController};

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
    return view('welcome');
});

// Route::get('/notification', [HomeController::class, 'notification'])->name('notifications');


// Auth::routes();
// Route::get('/', [ShopifyAppController::class, 'index']);

// Route::get('/', function () {
//     return view('welcome');
// })->middleware(['verify.shopify'])->name('home');

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/auth/google', [HomeController::class, 'redirectToGoogle']);
// Route::get('/auth/google/callback', [HomeController::class, 'handleGoogleCallback']);

// 
// Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::get('/404-error', function () {
//     return view('404-error');
// });

Route::get('/404-error', function () { return view('404-error'); });
Route::get('/about-v2', function () { return view('about-v2'); });
Route::get('/about', function () { return view('about'); });
Route::get('/account-app-integration', function () { return view('account-app-integration'); });
Route::get('/account-appearance', function () { return view('account-appearance'); });
Route::get('/account-billing', function () { return view('account-billing'); });
Route::get('/account-device-session', function () { return view('account-device-session'); });
Route::get('/account-home', function () { return view('account-home'); });
Route::get('/account-notification', function () { return view('account-notification'); });
Route::get('/account-profile', function () { return view('account-profile'); });
Route::get('/account-security', function () { return view('account-security'); });
Route::get('/account-social-links', function () { return view('account-social-links'); });
Route::get('/account-team', function () { return view('account-team'); });
Route::get('/blog-category', function () { return view('blog-category'); });
Route::get('/blog-grid-thumbnail', function () { return view('blog-grid-thumbnail'); });
Route::get('/blog-list-view', function () { return view('blog-list-view'); });
Route::get('/blog-sidebar', function () { return view('blog-sidebar'); });
Route::get('/blog-single', function () { return view('blog-single'); });
Route::get('/blog', function () { return view('blog'); });
Route::get('/career', function () { return view('career'); });
Route::get('/case-study', function () { return view('case-study'); });
Route::get('/changelog', function () { return view('changelog'); });
Route::get('/contact-1', function () { return view('contact-1'); });
Route::get('/contact-2', function () { return view('contact-2'); });
Route::get('/event-single', function () { return view('event-single'); });
Route::get('/events', function () { return view('events'); });
Route::get('/forget-password-v2', function () { return view('forget-password-v2'); });
Route::get('/forget-password', function () { return view('forget-password'); });
Route::get('/home', function () { return view('home'); });
Route::get('/index-2', function () { return view('index-2'); });
Route::get('/index', function () { return view('index'); });
Route::get('/integration-single', function () { return view('integration-single'); });
Route::get('/integration', function () { return view('integration'); });
Route::get('/landing-accounting', function () { return view('landing-accounting'); });
Route::get('/landing-conference', function () { return view('landing-conference'); });
Route::get('/landing-finance', function () { return view('landing-finance'); });
Route::get('/landing-it-company', function () { return view('landing-it-company'); });
Route::get('/landing-jamstack-agancy', function () { return view('landing-jamstack-agancy'); });
Route::get('/landing-personal', function () { return view('landing-personal'); });
Route::get('/landing-sass-v1', function () { return view('landing-sass-v1'); });
Route::get('/landing-sass-v2', function () { return view('landing-sass-v2'); });
Route::get('/notification', function () { return view('notification'); });
Route::get('/offcanvasRight', function () { return view('offcanvasRight'); });
Route::get('/otp-varification-v2', function () { return view('otp-varification-v2'); });
Route::get('/otp-varification', function () { return view('otp-varification'); });
Route::get('/portfolio-single', function () { return view('portfolio-single'); });
Route::get('/portfolio', function () { return view('portfolio'); });
Route::get('/pricing-v1', function () { return view('pricing-v1'); });
Route::get('/pricing-v2', function () { return view('pricing-v2'); });
Route::get('/reset-password-v2', function () { return view('reset-password-v2'); });
Route::get('/reset-password', function () { return view('reset-password'); });
Route::get('/service-v1', function () { return view('service-v1'); });
Route::get('/service-v2', function () { return view('service-v2'); });
Route::get('/service-v3', function () { return view('service-v3'); });
Route::get('/signin-v2', function () { return view('signin-v2'); });
Route::get('/signin', function () { return view('signin'); });
Route::get('/signup-v2', function () { return view('signup-v2'); });
Route::get('/signup', function () { return view('signup'); });
Route::get('/welcome', function () { return view('welcome'); });