<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/test2', function () {
    return 'testing';
});

Route::post('/test-post-store', function () {
    // return request()->username;
    return request()->all();
})->name('test-post');

Route::put('/test-post-update/{studentID}', function () {
    return request()->all();
})->name('test-post-update');

Route::delete('/test-post-delete/{studentID}', function () {
    // do delete logic

    //if success redirect
    return redirect()->route('index');
})->name('test-post-delete');


Route::get('/faculty/{department}/{faculty}', function () {
    // department
   return 'faculty details';
})->name('route-mulitple-params');


Route::get('/', [WelcomeController::class, 'index'])->name('index');


Route::get('/posts', [PagesController::class, 'posts'])->name('posts');
Route::get('/posts-view', [PagesController::class, 'postsView'])->name('posts.view');
Route::get('/posts-view-single/{id}', [PagesController::class, 'show'])->name('posts.show');