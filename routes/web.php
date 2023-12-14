<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\PageController;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\OrderController;
use \App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Pages
Route::controller(PageController::class)->group(function() {
    Route::get('/','index')->name('index');
});
