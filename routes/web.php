<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\TaskListController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;

// Membuat route untuk home
// Route untuk halaman utama aplikasi, memanggil method 'index' dari TaskController
Route::get('/', [TaskController::class, 'index'])->name('home');

// Route resource untuk mengelola 'lists', menggunakan TaskListController
Route::resource('lists', TaskListController::class);
// Route untuk fitur pencarian, memanggil method 'search' dari SearchController
Route::get('search', [SearchController::class, 'search'])->name('search');

// Route resource untuk mengelola 'tasks', menggunakan TaskController
Route::resource('tasks', TaskController::class);
// Route untuk menandai tugas sebagai selesai (completed), memanggil method 'complete' dari TaskController
Route::patch('/tasks/{task}/complete', [TaskController::class, 'complete'])->name('tasks.complete');

// Route::get('upload', [ImageController::class, 'showForm']);
// Route::post('upload', [ImageController::class, 'uploadImage'])->name('upload.image');
// Route::get('images', [ImageController::class, 'showImages'])->name('show.images');
// Route::delete('images/{image}', [ImageController::class, 'deleteImage'])->name('image.delete');

