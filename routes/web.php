<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/curriculum-vitae', 'HistoryController@index');
Route::get('/curriculum-vitae/{slug}/details', 'HistoryController@show');
Route::get('/contact', 'ContactController@index');
Route::get('/projets', 'ProjectController@index');

Route::get('/blog', 'PostController@index');
Route::get('blog/{slug}', 'PostController@show');


Route::prefix('admin')->group(function () {
    Route::get('posts', 'Admin\PostController@index');
    Route::get('posts/create', 'Admin\PostController@create');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
