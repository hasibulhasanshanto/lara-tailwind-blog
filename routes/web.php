<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesControlller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * Frontend Routes
 */
Route::get('/', [PagesControlller::class, 'index'])->name('front.home');

/**
 * Auth Routes
 */
Auth::routes();


/**
 * Backend Routes
 */
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');