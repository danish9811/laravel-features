<?php

use App\Http\Controllers\{PassportAuthController, SearchController, TestController};
use Illuminate\Support\Facades\Route;

Route::get('/', static function () {
    return phpinfo();
});

Route::get('/login', [PassportAuthController::class, 'showLoginForm'])->name('login');
Route::get('/register', [PassportAuthController::class, 'showRegisterForm'])->name('register');
Route::get('/login-submit', [PassportAuthController::class, 'passportAuthLoginSubmit']);
Route::get('/register-submit', [PassportAuthController::class, 'passportAuthRegisterSubmit']);
Route::get('/chart', [PassportAuthController::class, 'showApexChart'])->middleware('auth')->name('apex-chart');

Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::get('/autocomplete', [SearchController::class, 'autocomplete'])->name('autocomplete');
Route::get('/test-method', [TestController::class, 'createHashes'])->name('test');