<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\HomeController@home')->name('home.home');

Route::get('/home', 'App\Http\Controllers\HomeController@home')->name('page.home');

Route::get('/admin', 'App\Http\Controllers\AdminController@admin')->name('admin.admin');
Route::get('/admin/delete/{post}', 'App\Http\Controllers\AdminController@deleteAdmin')->name('admin.delete');

Route::get('/edit/{post}', 'App\Http\Controllers\PostsController@edit')->name('posts.edit');
Route::post('/edit', 'App\Http\Controllers\PostsController@editPost')->name('posts.edit.handler');

Route::get('/makepost', 'App\Http\Controllers\PostsController@makepost')->name('posts.makepost');
Route::post('/makepost', 'App\Http\Controllers\PostsController@handle')->name('posts.handle');

Route::get('/users', 'App\Http\Controllers\UserController@users')->name('user.user');

// Route::get('/login', 'App\Http\Controllers\LoginController@loginpage')->name('login.loginpage');
// Route::post('/login', 'App\Http\Controllers\LoginController@login')->name('login.login');

Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

// Route::get('/registreren', 'App\Http\Controllers\RegistrerenController@show')->name('registreren.show');
// Route::post('/registreren', 'App\Http\Controllers\RegistrerenController@registreren')->name('registreren.registreren');



Route::get('/user/{persoon}', 'App\Http\Controllers\UserController@overmij')->name('user.overmij');
Route::get('/posts/{post}', 'App\Http\Controllers\PostsController@show')->name('posts.show');

Auth::routes();
