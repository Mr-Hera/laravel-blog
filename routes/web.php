<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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

// show all blogs
Route::get('/', [BlogController::class, 'index']);

// show create blog form
Route::get('/blogs/create', [BlogController::class, 'create']);

// store blog data
Route::post('/blogs', [BlogController::class, 'store']);

// show single blog
Route::get('/blogs/{blog}', [BlogController::class, 'show']);