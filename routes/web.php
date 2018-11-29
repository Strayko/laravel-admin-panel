<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/logout', 'Auth\LoginController@logout');
    Route::auth();
    Route::get('/home', 'HomeController@index');


    //Admin routes

});

Route::group(['middleware'=>['web','admin']], function() {
    Route::resource('/admin/users', 'AdminUsersController');
    Route::resource('/admin/posts', 'AdminPostsController');
    Route::resource('/admin/categories', 'AdminCategoriesController');
    Route::resource('/admin/media', 'AdminMediasController');
    Route::resource('/admin/comments', 'PostCommentsController');
    Route::resource('/admin/comment/replies', 'CommentRepliesController');

    Route::get('/post/{id}', ['as'=>'home.post', 'uses'=>'AdminPostsController@post']);
    Route::get('/admin', function() {
        return view('admin.index');
    });
});
