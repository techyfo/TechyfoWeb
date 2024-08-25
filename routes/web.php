<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[\App\Http\Controllers\WebsiteController::class,'home'])->name('home');
Route::get('/about',[\App\Http\Controllers\WebsiteController::class,'about'])->name('about');
Route::get('/contact',[\App\Http\Controllers\WebsiteController::class,'contact'])->name('contact');

Route::get('/portfolios',[\App\Http\Controllers\WebsiteController::class,'portfolios'])->name('portfolios');
Route::get('/blog',[\App\Http\Controllers\WebsiteController::class,'blog'])->name('blog');
Route::get('/team',[\App\Http\Controllers\WebsiteController::class,'team'])->name('team');
Route::get('/gallery',[\App\Http\Controllers\WebsiteController::class,'gallery'])->name('gallery');
Route::get('/clients',[\App\Http\Controllers\WebsiteController::class,'clients'])->name('clients');
Route::get('/blog',[\App\Http\Controllers\WebsiteController::class,'blog'])->name('blog');
//services
Route::get('/service/{slug}',[\App\Http\Controllers\WebsiteController::class,'service'])->name('service');
Route::get('/author/{slug}',[\App\Http\Controllers\WebsiteController::class,'author'])->name('author');
Route::get('/category/{slug}',[\App\Http\Controllers\WebsiteController::class,'category'])->name('category');
Route::get('/sitemap.xml', [\App\Http\Controllers\SitemapController::class, 'index'])->name('sitemap');
Route::get('/{slug}',[\App\Http\Controllers\WebsiteController::class,'page_or_post'])->name('page_or_post');