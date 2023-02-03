<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;

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

// show edit blog form
Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit']);

// update blog
Route::put('/blogs/{blog}', [BlogController::class, 'update']);

// delete blog
Route::delete('/blogs/{blog}', [BlogController::class, 'destroy']);

// show single blog
Route::get('/blogs/{blog}', [BlogController::class, 'show']);

// show registration form
Route::get('/register', [UserController::class, 'create']);

// create new user
Route::post('/users', [UserController::class, 'store']);