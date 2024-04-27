<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MailController;
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

//BLog page
Route::get('/blog', [PagesController::class, 'blog']);

//Single Article page
Route::get('/blog/{slug}', [PagesController::class, 'single_post']);

//Single Portfolio page
Route::get('/our-work/{slug}', [PagesController::class, 'single_portfolio']);

//Contact page
Route::get('/contact', [PagesController::class, 'contact']);

//Static Pages
Route::get('/{slug}', [PagesController::class, 'static_pages']);

//Website checker
Route::post('/website-checker', [PagesController::class, 'website_checker']);

//Website checker send the email
Route::post('/website-checker-email-send', [PagesController::class, 'website_checker_send_email']);

//Mail
Route::get('/contact/submit-email', [MailController::class, 'submit_email']);

//Sitemap
Route::get('/sitemap.xml', [PagesController::class, 'sitemap']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
