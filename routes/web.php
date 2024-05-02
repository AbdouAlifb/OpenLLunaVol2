<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\SitemapGenerator;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::middleware(['auth'])->group(function () {
    Route::get('admin/posts', [BlogController::class, 'index'])->name('posts.index');
    Route::get('admin/posts/create', [BlogController::class, 'create'])->name('posts.create');
    Route::post('admin/posts', [BlogController::class, 'store'])->name('posts.store');
    Route::delete('admin/posts/{post}', [BlogController::class, 'destroy'])->name('posts.destroy');
});



// Home page
Route::get('/', [PagesController::class, 'home'])->name('home');

// About page
Route::get('/about', [PagesController::class, 'about'])->name('about');

// Contact page
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

Route::get('/blog', [PagesController::class, 'blog'])->name('blog');

Route::get('/post/{id}', [BlogController::class, 'show'])->name('post.show');

// Services page
Route::get('/services', [PagesController::class, 'services'])->name('services');

// Portfolio page
Route::get('/portfolio', [PagesController::class, 'portfolio'])->name('portfolio');

// Team page
Route::get('/team', [PagesController::class, 'team'])->name('team');

// FAQ page
Route::get('/faq', [PagesController::class, 'faq'])->name('faq');

// Terms of Service page
Route::get('/terms', [PagesController::class, 'terms'])->name('terms');

// Privacy Policy page
Route::get('/privacy', [PagesController::class, 'privacy'])->name('privacy');


Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/send-contact-form', 'ContactController@store')->name('send.contact.form');

Route::get('/sitemap.xml', function () {
    SitemapGenerator::create(config('app.url'))->writeToFile(public_path('sitemap.xml'));
    return response()->file(public_path('sitemap.xml'), ['Content-Type' => 'application/xml']);
});
