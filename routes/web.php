<?php

//use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\HomeController@home')->name('home.home');
Route::get('/admin', 'App\Http\Controllers\AdminController@admin')->name('admin.admin');

Route::get('/makepost', 'App\Http\Controllers\PostsController@makepost')->name('posts.makepost');
Route::post('/makepost', 'App\Http\Controllers\PostsController@handle')->name('posts.handle');

Route::get('/users', 'App\Http\Controllers\UserController@users')->name('user.user');
Route::get('/login', 'App\Http\Controllers\LoginController@loginpage')->name('login.loginpage');
Route::get('/registreren', 'App\Http\Controllers\RegistrerenController@show')->name('registreren.show');



Route::get('/user/{persoon}', 'App\Http\Controllers\UserController@overmij')->name('user.overmij');
Route::get('/posts/{post}', 'App\Http\Controllers\PostsController@show')->name('posts.show');
Route::post('/registreren/update/{info}', 'App\Http\Controllers\RegistrerenController@update')->name('registreren.update');