<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// home controller 
Route::get('/', [HomeController::class, 'index'])->name('home');

// blog controller
Route::get('/allBlogs', [BlogController::class, 'takeAll'])->name('allBlogs');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blogEdit/{id}', [BlogController::class, 'show']);

Route::post('/blogadd', [BlogController::class, 'add'])->name('blogAdd');
