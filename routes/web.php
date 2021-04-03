<?php

use App\Http\Controllers\AboutContentController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\MailProController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TestiController;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\WelcomeController;
use App\Models\Contact;
use App\Models\Service;
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

// contact
Route::resource('contact', ContactController::class);

// newsletter
Route::resource('newsletter', NewsletterController::class);

// Email
Route::resource('email', EmailController::class);

// commentaire
Route::resource('comment', CommentController::class);

// search Title
Route::get('/search/', [SearchController::class, 'search'])->name('search');

// search categorie
Route::get('/categorie/{id}', [SearchController::class, 'categorie']);

// search Tags
Route::get('/tag/{id}', [SearchController::class, 'tag']);


                    // Backoffice

// article 
Route::resource('article', ArticleController::class);

// logo
Route::resource('logo', LogoController::class);

// Carousel
Route::resource('carousel', CarouselController::class);

// pour la page service back office
Route::get('/serviceBack', function(){
    $service = Service::all();
    return view('backoffice/service/index', compact('service'));
});

// titre 
Route::resource('title', TitleController::class);

// About content
Route::resource('aboutContent', AboutContentController::class);

//video
Route::resource('video', VideoController::class);

// testimonials
Route::resource('testi', TestiController::class);

// emailPro
Route::resource('mailPro', MailProController::class);

// subject
Route::resource('subject', SubjectController::class);

// footer
Route::resource('footer', FooterController::class);

// map
Route::resource('map', MapController::class);

// Categorie
Route::resource('categorieBack', CategorieController::class);

// Tag
Route::resource('tagBack', TagController::class);

// user 
Route::resource('user', UserController::class);