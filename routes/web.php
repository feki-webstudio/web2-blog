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

Route::get('/', 'BlogPostController@index');

Route::group(['middleware' => ['auth']], function (){

    Route::get('/new-post', 'BlogPostController@showForm');
    Route::post('/new-post', 'BlogPostController@savePost');

    Route::get('/edit-post/{id}', 'BlogPostController@editPost');
    Route::post('/edit-post/{id}', 'BlogPostController@updatePost');

    Route::post('/delete-post/{id}', 'BlogPostController@deletePost');

    Route::post('/new-comment', 'CommentController@saveComment');

});

Route::resource('/api/comments', 'ApiCommentController');

Auth::routes();
