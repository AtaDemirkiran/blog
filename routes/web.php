<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// home controller 
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category/{blogCategory}', [HomeController::class, 'show_category']);
// blog controller
Route::get('/admin', [BlogController::class, 'home'])->name('admin');
Route::get('/admin/blogs', [BlogController::class, 'takeAll'])->name('allBlogs');
Route::get('/admin/blog-add', [BlogController::class, 'index'])->name('blog-add');
Route::get('/admin/blogs/{id}', [BlogController::class, 'show']);
Route::post('/admin/blogUpdate', [BlogController::class, 'update'])->name('blogUpdate');

Route::post('/admin/blogadd', [BlogController::class, 'add'])->name('blogAdd');

Route::get('/admin/delete/{id}', [BlogController::class, 'delete']);
