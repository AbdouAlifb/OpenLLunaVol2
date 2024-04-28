<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;


// Home page
Route::get('/', [PagesController::class, 'home'])->name('home');

// About page
Route::get('/about', [PagesController::class, 'about'])->name('about');

// Contact page
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

Route::get('/blog', [PagesController::class, 'blog'])->name('blog');

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
