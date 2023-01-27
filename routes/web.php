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
    return view('welcome');
});

Route::get('/about', 'AboutController@Index')->name('about.index');
Route::get('/contacts', 'ContactsController@Index')->name('contact.index');
Route::get('/main', 'MainController@Index')->name('main.index');
Route::get('/posts', 'PostController@Index')->name('post.index');
Route::get('/posts/create', 'PostController@Create');
Route::get('/posts/update', 'PostController@Update');
Route::get('/posts/delete', 'PostController@Delete');
Route::get('/posts/first_or_create', 'PostController@firstOrCreate');
