<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageLoader;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageLoader::class, 'index']);

Route::get('/registration', function () {
    return view('registration');
})->name('registration');

Route::get('/films', function () {
    return view('filmsList');
});

Route::post('/register/', [RegisterController::class, 'register'])->name('register');
Route::post('/login/', [LoginController::class, 'login'])->name('login');

Route::get('/logout/', [LoginController::class, "logout"])->name("logout");

Route::get('/profile', function () {
    return view('profile');
})->name('profile')->middleware('user');

Route::get('/profile/library/', function () {
    return view('profile');
})->name('library')->middleware('user');

Route::get('/category/{id}', [PageLoader::class, 'category']);
