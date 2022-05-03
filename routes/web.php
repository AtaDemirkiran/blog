<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// home controller 
// Route::get('/admin', [HomeController::class, 'index'])->name('home');

// blog controller
Route::get('/admin', [BlogController::class, 'home'])->name('home');
Route::get('/admin/allBlogs', [BlogController::class, 'takeAll'])->name('allBlogs');
Route::get('/admin/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/admin/allBlogs/{id}', [BlogController::class, 'show']);
Route::post('/admin/blogUpdate', [BlogController::class, 'update'])->name('blogUpdate');

Route::post('/admin/blogadd', [BlogController::class, 'add'])->name('blogAdd');

Route::get('/admin/delete/{id}', [BlogController::class, 'delete']);
