<?php

use App\Http\Controllers\{PassportAuthController,
    PenController,
    SearchController,
    StripePaymentController,
    TestController
};
use Illuminate\Support\Facades\Route;

Route::get('/', static function () {
    return phpinfo();
});

Route::get('/login', [PassportAuthController::class, 'showLoginForm'])->name('login');
Route::get('/register', [PassportAuthController::class, 'showRegisterForm'])->name('register');
Route::post('/login-submit', [PassportAuthController::class, 'passportAuthLoginSubmit']);
Route::get('/register-submit', [PassportAuthController::class, 'passportAuthRegisterSubmit']);

Route::get('/chart', [PassportAuthController::class, 'showApexChart'])->middleware('auth')->name('apex-chart');

Route::controller(SearchController::class)->group(static function () {
    Route::get('/search', 'index')->name('search');
    Route::get('/autocomplete', 'autocomplete')->name('autocomplete');
});

Route::get('/pen', PenController::class);

Route::get('/query-test', [TestController::class, 'testHotelBookingQuery']);

Route::controller(StripePaymentController::class)->group(function () {
    Route::get('stripe', 'stripe');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});

