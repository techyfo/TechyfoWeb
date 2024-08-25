<?php

use Illuminate\Support\Facades\Route;

Route::get('migrate', function (){
    \Illuminate\Support\Facades\Artisan::call('migrate');
   return \Illuminate\Support\Facades\Artisan::output();
});
Route::get('migrate-fresh', function (){
    \Illuminate\Support\Facades\Artisan::call('migrate:fresh');
   return \Illuminate\Support\Facades\Artisan::output();
});
Route::get('migrate-fresh-seed', function (){
    \Illuminate\Support\Facades\Artisan::call('migrate:fresh --seed');
   return \Illuminate\Support\Facades\Artisan::output();
});
Route::get('seed', function (){
    \Illuminate\Support\Facades\Artisan::call('db:seed');
   return \Illuminate\Support\Facades\Artisan::output();
});
Route::get('optimize', function (){
    \Illuminate\Support\Facades\Artisan::call('route:clear');
    \Illuminate\Support\Facades\Artisan::call('view:clear');
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    \Illuminate\Support\Facades\Artisan::call('optimize');
    \Illuminate\Support\Facades\Artisan::call('optimize:clear');
   return \Illuminate\Support\Facades\Artisan::output();
});

Route::get('clear-route', function (){
    \Illuminate\Support\Facades\Artisan::call('route:clear');
   return \Illuminate\Support\Facades\Artisan::output();
});
Route::get('clear-view', function (){
    \Illuminate\Support\Facades\Artisan::call('view:clear');
   return \Illuminate\Support\Facades\Artisan::output();
});
Route::get('clear-cache', function (){
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
   return \Illuminate\Support\Facades\Artisan::output();
});
