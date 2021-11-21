<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageLoader;
use App\Http\Controllers\UserController;
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

Route::get('/films', [PageLoader::class, 'filmsList']);

Route::post('/register/', [RegisterController::class, 'register'])->name('register');
Route::post('/login/', [LoginController::class, 'login'])->name('login');

Route::get('/logout/', [LoginController::class, "logout"])->name("logout");

Route::get('/profile', [PageLoader::class, "profileAbout"])->name('profile')->middleware('user');

Route::get('/profile/library/', [PageLoader::class, "profileLibrary"])->name('library')->middleware('user');

Route::get('/category/{id}', [PageLoader::class, 'category']);

Route::get("/film/{id}", [PageLoader::class, "film"]);

Route::get('/addToLibrary/{id}', [UserController::class, "addToLibrary"]);

Route::post("/filmSearch/", [PageLoader::class, "filmSearch"])->name('filmSearch');