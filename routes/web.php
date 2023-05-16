<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\projectController;
use Illuminate\Support\Facades\Route;



Route::get('/index', [projectController::class,'index'])->name('index');
Route::get('/about', [projectController::class,'about']);

Route::get('/type/create', [projectController::class,'create'])->name('typ.create');
Route::post('/type/store', [projectController::class,'store'])->name('typ.store');


Route::get('/products', [ProductController::class, 'create']);

