<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/', [ProductController::class, 'welcome'])->name('Home');
    Route::resource('products', ProductController::class);
    Route::get('/about', function () {
        return view('about');
    })->name('About');
    Route::get('/contact', function () {
        return view('contact.index');
    })->name('Contact');
    Route::post('/contact', function () {
        return view('contact.submit');
    })->name('contact.submit');
    Route::get('/search', [ProductController::class, 'search'])->name('products.search');
});

require __DIR__.'/auth.php';
