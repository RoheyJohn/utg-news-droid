<?php

use App\Http\Controllers\NewsController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [NewsController::class, 'index']);

Auth::routes();

Route::get('/dashboard', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/users', [\App\Http\Controllers\UsersController::class, 'index'])->name('users.index');

Route::prefix('/schools')->middleware(['auth'])->group(function () {
    Route::get('/', [\App\Http\Controllers\SchoolsController::class, 'index'])->name('schools.index');
    Route::get('/create', [\App\Http\Controllers\SchoolsController::class, 'create'])->name('schools.create');
});

Route::prefix('/associations')->middleware(['auth'])->group(function () {
    Route::get('/', [\App\Http\Controllers\AssociationsController::class, 'index'])->name('associations.index'); 
    Route::get('/create', [\App\Http\Controllers\AssociationsController::class, 'create'])->name('associations.create'); 
    Route::get('/show', [\App\Http\Controllers\AssociationsController::class, 'show'])->name('associations.show');
});

Route::prefix('/news')->middleware(['auth'])->group(function () {
    Route::get('/', [\App\Http\Controllers\NewsController::class, 'indexs'])->name('news.indexs');
    Route::get('/create', [\App\Http\Controllers\NewsController::class, 'create'])->name('news.create');
    Route::get('/show', [\App\Http\Controllers\NewsController::class, 'show'])->name('news.show');
});

// Route::get('/news', [\App\Http\Controllers\NewsController::class, 'indexs'])->name('news.indexs');
// Route::get('/news/create', [\App\Http\Controllers\NewsController::class, 'create'])->name('news.create');

Route::prefix('/users')->middleware(['auth'])->group(function () {
    Route::get('/', [\App\Http\Controllers\UsersController::class, 'index'])->name('users.index'); 
});