<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RetrieveContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/q', function () {
    return view('Q');
});

#Route::post('/q', 'ContactController@storeData');
Route::post('/q', [ContactController::class, 'storeData']);

Route::get('/contact', [RetrieveContactController::class, 'index']);
