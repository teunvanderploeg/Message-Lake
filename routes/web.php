<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PostsController::class, 'index'])->name('index');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('posts', PostsController::class)->except('index');

    Route::get('/users', [UserController::class, 'users'])->name('user.user');
    Route::get('/users/{person}', [UserController::class, 'overmij'])->name('user.overmij');

    Route::group(['middleware' => 'isAdmin'], function () {
        Route::get('/admin', [AdminController::class, 'admin'])->name('admin.admin');
    });
});

Auth::routes();
