<?php

//use Illuminate\Support\Facades\Route;





Route::get('/', 'App\Http\Controllers\HomeController@home');
Route::get('/admin', 'App\Http\Controllers\AdminController@admin');
Route::get('/makepost', 'App\Http\Controllers\PostsController@makepost');
Route::get('/users', 'App\Http\Controllers\UserController@users');
Route::get('/me', 'App\Http\Controllers\PostsController@me');
Route::get('/login', 'App\Http\Controllers\LoginController@loginpage');



Route::get('/user/{persoon}', 'App\Http\Controllers\UserController@overmij');
Route::get('/posts/{post}', 'App\Http\Controllers\PostsController@show');