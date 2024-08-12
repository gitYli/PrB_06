<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RetrieveContactController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ServicesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/q', function () {
    return view('Q');
});

Route::post('/q', [ContactController::class, 'storeData']);

Route::get('/test', function () {
    return view('test');
});

Route::post('/data', [ServicesController::class, 'storeData']);

Route::get('/contact', [RetrieveContactController::class, 'index']);


Route::get('/admin/dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('/admin/login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('/admin/registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
