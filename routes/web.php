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
    return view('blog.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function () {
    return view('blog.admin.index');
});

Route::group(['namespace' => 'Admin\Blog', 'prefix' => 'admin/blog'], function () {
   Route::resource('posts', 'PostController')
       ->names('admin.blog.posts');
   Route::resource('categories', 'CategoryController')
       ->names('admin.blog.categories');
   Route::resource('comments', 'CommentsController')
       ->names('admin.blog.comments');
   Route::resource('newsLetters', 'NewsLetterController')
       ->names('admin.blog.newsLetters');
});

Route::group(['namespace' => 'Admin\Gods', 'prefix' => 'admin/gods'], function () {
    Route::resource('posts', 'PostController')
        ->names('admin.gods.posts');
    Route::resource('categories', 'CategoryController')
        ->names('admin.gods.categories');
    Route::resource('comments', 'CommentsController')
        ->names('admin.gods.comments');
});

Route::group(['namespace' => 'Admin\Images', 'prefix' => 'admin/images'], function () {
    Route::resource('posts', 'PostController')
        ->names('admin.images.posts');
    Route::resource('categories', 'CategoryController')
        ->names('admin.images.categories');
});