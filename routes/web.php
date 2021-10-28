<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'home'])->name('home.home');
Route::get('/home', [HomeController::class, 'home'])->name('home.home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/edit/{post}', [PostsController::class, 'edit'])->name('posts.edit');
    Route::post('/edit', [PostsController::class, 'editPost'])->name('posts.edit.handler');
    Route::get('/makepost', [PostsController::class, 'makepost'])->name('posts.makepost');
    Route::post('/makepost', [PostsController::class, 'handle'])->name('posts.handle');
    Route::get('/posts/{post}', [PostsController::class, 'show'])->name('posts.show');

    Route::get('/users', [UserController::class, 'users'])->name('user.user');
    Route::get('/user/{persoon}', [UserController::class, 'overmij'])->name('user.overmij');

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/admin', [AdminController::class, 'admin'])->name('admin.admin');
    Route::get('/admin/delete/{post}', [AdminController::class, 'deleteAdminn'])->name('admin.delete');
});

Auth::routes();
