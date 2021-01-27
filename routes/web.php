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
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth:sanctum'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');

    Route::get('/users', [UsersController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');
    Route::post('/users/store', [UsersController::class, 'store'])->name('users.store');
    Route::get('/users/edit/{id}', [UsersController::class, 'edit'])->name('users.edit');
    Route::put('/users/update/{id}', [UsersController::class, 'update'])->name('users.update');
    Route::delete('/users/delete/{id}', [UsersController::class, 'destroy'])->name('users.delete');
});


/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
|
| Here is where all Frontend routes declared
|
*/
Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/', [PagesController::class, 'index'])->name('index');
    Route::get('/posts/{id}', [PagesController::class, 'postShow'])->name('posts.show');
    Route::get('/categories/{id}', [PagesController::class, 'categoriesShow'])->name('categories.index');

    // Create first time permissions and roles
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
