<?php

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
    return view('app');
});

Route::prefix('auth')->group(function () {
    Route::get('init', 'UserController@init');
    Route::post('login', 'UserController@login');
    Route::post('register', 'UserController@register');
    Route::post('logout', 'UserController@logout');
});

Route::get('categories', 'CategoryController@getCats');
Route::get('forum/{id}', 'ForumController@getForumById');
Route::post('post/create', 'PostController@create');

Route::prefix('thread')->group(function () {
    Route::get('search/{searchQuery}', 'ThreadController@search');
    Route::post('create', 'ThreadController@create');
    Route::get('/{id}', 'ThreadController@getThreadById');
});
