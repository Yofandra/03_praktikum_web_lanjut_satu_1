<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeeController;
use App\Http\Controllers\ProgramController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::get('/homee', [HomeeController::class, 'homee'])->name('homee');

Route::prefix('/product')->group(function () {
    Route::get('/sayur', [ProductController::class, 'sayur'])->name('sayur');
    Route::get('/daging', [ProductController::class, 'daging'])->name('daging');
    Route::get('/buah', [ProductController::class, 'buah'])->name('buah');
});

Route::get('/news/{id}', [NewsController::class, 'news'])->name('news');

Route::prefix('/program')->group(function () {
    Route::get('/belanjamurah', [ProgramController::class, 'belanjamurah'])->name('belanjamurah');
    Route::get('/belanjabulanan', [ProgramController::class, 'belanjabulanan'])->name('belanjabulanan');
});

Route::get('/aboutUs', [AboutUsController::class, 'aboutUs'])->name('aboutUs');

Route::resource('contactUs', ContactController::class);
