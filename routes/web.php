<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

//Index page
Route::get('/', [PagesController::class, 'index']);

//Services page
Route::get('/services', [PagesController::class, 'services']);

//Single Service page
Route::get('service/{slug}', [PagesController::class, 'single_service']);

//About page
Route::get('/about', [PagesController::class, 'about']);

//Portfolio page
Route::get('/our-work', [PagesController::class, 'portfolio']);

//Single Portfolio page
Route::get('/our-work/{slug}', [PagesController::class, 'single_portfolio']);

//Contact page
Route::get('/contact', [PagesController::class, 'contact']);

//Static Pages
Route::get('/{slug}', [PagesController::class, 'static_pages']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
