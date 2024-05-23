<?php

use App\Http\Controllers\Admin\CardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\LogController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class, 'index'])->middleware('can:admin.home')->name('home');

Route::get('socials', [SocialController::class, 'index'])->name('socials.index');

Route::resource('logs', LogController::class)->only('index', 'show')->names('logs');

Route::resource('users', UserController::class)->only(['index', 'edit', 'update'])->names('users');

Route::resource('roles', RoleController::class)->names('roles');

Route::resource('cards', CardController::class)->names('cards');

Route::resource('products', ProductController::class)->except('show')->names('products');

Route::resource('categories', CategoryController::class)->except('show')->names('categories');

