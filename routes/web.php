<?php

use Illuminate\Support\Facades\Route;

Route::get('/migrate', function () {
    \Illuminate\Support\Facades\Artisan::call('migrate:fresh');
    return \Illuminate\Support\Facades\Artisan::output();
});
Route::get('',[\App\Http\Controllers\WebsiteController::class,'home'])->name('home');

