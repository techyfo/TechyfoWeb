<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('',[\App\Http\Controllers\WebsiteController::class,'home'])->name('home');
