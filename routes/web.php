<?php

Route::get('/', function () {
    return view('welcome');
});


Route::get('/tasks/index', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');
Route::get('/posts/create', 'PostsController@create');

Route::get('/', 'PostsController@index');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');
