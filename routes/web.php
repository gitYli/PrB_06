<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RetrieveContactController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ClientController;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [RetrieveContactController::class, 'retrieve'])->name('panorama');

Route::post('/', [ContactController::class, 'storeData']);

Route::post('/services', [ServicesController::class, 'storeData']);
Route::post('/services/edit/{id}', [ServicesController::class, 'update']);
Route::get('/services/delete/{id}', [ServicesController::class, 'destroy']);

Route::post('/clients', [ClientController::class, 'storeData']);
Route::post('/clients/edit/{id}', [ClientController::class, 'update']);
Route::get('/clients/delete/{id}', [ClientController::class, 'destroy']);

Route::get('/admin/contact', [ContactController::class, 'show'])->name('admin.contact');
Route::get('/admin/services', [CustomAuthController::class, 'services'])->name('admin.services');
Route::get('/admin/clients', [CustomAuthController::class, 'clients'])->name('admin.clients');

Route::get('/admin/login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('/admin/register', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
