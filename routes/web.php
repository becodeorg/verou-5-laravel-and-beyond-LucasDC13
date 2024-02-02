<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\UserController;

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

Route::get('/', [HomeController::class, 'index'])->name("home");

Route::get('/users/login', [UserController::class, 'login'])->name("user-login");

Route::get('/users/create', [UserController::class, 'create'])->name("user-create");

Route::post('/users', [UserController::class, 'store'])->name("user-store");

Route::resource('/albums', AlbumController::class);

Route::get('/users/albums', [AlbumController::class, 'myAlbums'])->name("my-albums");