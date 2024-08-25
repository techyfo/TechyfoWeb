<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('migrate-fresh-seed', function (){
    //\Illuminate\Support\Facades\Artisan::call('migrate:fresh --seed');
    echo "<pre>";
    print_r(\Illuminate\Support\Facades\Artisan::output());
});
Route::get('migrate-fresh', function (){
   // \Illuminate\Support\Facades\Artisan::call('migrate:fresh');
    echo "<pre>";
    print_r(\Illuminate\Support\Facades\Artisan::output());
});
Route::get('migrate', function (){
    \Illuminate\Support\Facades\Artisan::call('migrate');
    echo "<pre>";
    print_r(\Illuminate\Support\Facades\Artisan::output());
});
Route::get('optimize', function (){
    \Illuminate\Support\Facades\Artisan::call('optimize');
    echo "<pre>";
    print_r(\Illuminate\Support\Facades\Artisan::output());
    \Illuminate\Support\Facades\Artisan::call('optimize:clear');
    print_r(\Illuminate\Support\Facades\Artisan::output());
    \Illuminate\Support\Facades\Artisan::call('route:clear');
    print_r(\Illuminate\Support\Facades\Artisan::output());
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    print_r(\Illuminate\Support\Facades\Artisan::output());
    \Illuminate\Support\Facades\Artisan::call('view:clear');
    print_r(\Illuminate\Support\Facades\Artisan::output());
});
