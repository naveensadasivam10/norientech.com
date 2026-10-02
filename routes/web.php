<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/tirupatur-it-services', [PageController::class, 'tirupaturLanding'])->name('tirupatur-landing');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
