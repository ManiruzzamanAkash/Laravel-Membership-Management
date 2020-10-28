<?php

use App\Http\Controllers\TasksController;
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


Route::get('/', [TasksController::class, 'home'])->name('tasks.home');
Route::get('/about', [TasksController::class, 'about'])->name('about');
Route::get('/contact', [TasksController::class, 'contact'])->name('contact');
Route::resource('/tasks', TasksController::class);