<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SekolahController;

// Route menggunakan Controller
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{id}', [PostController::class, 'show']);
Route::get('/about-me', [PostController::class, 'about'])->name('posts.about');
Route::get('/profil/{id}', [SekolahController::class, 'show']);