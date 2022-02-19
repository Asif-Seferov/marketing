<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\TagController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('/', [MainController::class, 'index'])->name('index');
    Route::group(['prefix' => 'category', 'as' => 'category.'], function(){
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/create', [CategoryController::class, 'create'])->name('create');
        Route::post('/create', [CategoryController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [CategoryController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [CategoryController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => 'tag', 'as' => 'tag.'], function(){
        Route::get('/tags', [TagController::class, 'index'])->name('index');
        Route::get('/create', [TagController::class, 'create'])->name('create');
        Route::post('/create', [TagController::class, 'store'])->name('store');
    });
});
