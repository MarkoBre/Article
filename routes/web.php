<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'home')->name('home');
Route::view('about', 'aboutMe')->name('aboutMe');

// Articles routes
Route::middleware('auth')->group(function () {
    Route::resource('articles', ArticleController::class)->except(['index', 'store', 'update']);
    Route::post('/articles/create', [ArticleController::class, 'store'])->name('articles.store');
    Route::patch('/articles/{article}/edit', [ArticleController::class, 'update'])->name('articles.update');
    Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index')->withoutMiddleware('auth');
});

// Breeze auth
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
