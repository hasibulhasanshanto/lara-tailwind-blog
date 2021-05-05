<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PagesControlller;


/**
 * Frontend Routes
 */
Route::get('/', [PagesControlller::class, 'index'])->name('front.home');
Route::resource('/blog', PostController::class);

/**
 * Auth Routes
 */
Auth::routes();


/**
 * Backend Routes
 */
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');