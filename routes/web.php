<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WelcomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// service
Route::resource('service', ServiceController::class);

// blog
Route::resource('blog', BlogController::class);

// blogPost
Route::resource('blogPost', BlogPostController::class);

// contact
Route::resource('contact', ContactController::class);

// newsletter
Route::resource('newsletter', NewsletterController::class);

// Email
Route::resource('email', EmailController::class);

// article 
Route::resource('article', ArticleController::class);