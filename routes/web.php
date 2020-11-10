<?php

use App\Http\Controllers\Backend\Dashboard\DashboardController;
use App\Http\Controllers\Backend\User\UsersController;
use App\Http\Controllers\Frontend\PagesController;
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


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where all admin routes declared
|
*/
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');

    Route::get('/users', [UsersController::class, 'index'])->name('users.index');
});


/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
|
| Here is where all Frontend routes declared
|
*/
Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/posts/{id}', [PagesController::class, 'postShow'])->name('posts.show');
Route::get('/categories/{id}', [PagesController::class, 'categoriesShow'])->name('categories.index');
