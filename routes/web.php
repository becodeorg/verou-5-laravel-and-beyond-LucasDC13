<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/id/List', function () {
    return view('mylist');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/create', function () {
    return view('createaccount');
});