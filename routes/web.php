<?php


Route::get('/', function () {
    return view('front_page');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/posts', ['as'=>'posts.index', 'uses'=>'PostsController@index']);
Route::post('/posts', 'PostsController@store');
Route::get('/posts/create', 'PostsController@create');

