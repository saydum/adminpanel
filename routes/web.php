<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ModuleAdminController;

Auth::routes();

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

Route::resource('tag', TagController::class);
Route::resource('category', CategoryController::class);

Route::get('/module', [ModuleAdminController::class, 'index'])->name('module.index');
