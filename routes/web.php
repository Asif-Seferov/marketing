<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MarketingController;


Route::get('/', [MarketingController::class, 'index'])->name('index');
Route::get('/post/{slug}', [MarketingController::class, 'post_show'])->name('post.show');
Route::get('/category/{slug}', [MarketingController::class, 'category_show'])->name('category.show');
Route::get('/tags/{slug}', [MarketingController::class, 'tags_show'])->name('tags.show');

    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login-check', [LoginController::class, 'login_check'])->name('login.check');
    
Route::group(['namespace' => 'Admin',  'prefix' => 'admin', 'middleware' => 'auth', 'as' => 'admin.'], function(){
    
        Route::get('/', [MainController::class, 'index'])->name('index');
        
        Route::get('/logout', [LoginController::class, 'log_out'])->name('logout');
        Route::group(['prefix' => 'category', 'as' => 'category.'], function(){
            Route::get('/', [CategoryController::class, 'index'])->name('index');
            Route::get('/create', [CategoryController::class, 'create'])->name('create');
            Route::post('/create', [CategoryController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [CategoryController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [CategoryController::class, 'destroy'])->name('destroy');
        });

        Route::group(['prefix' => 'tag', 'as' => 'tag.'], function(){
            Route::get('/', [TagController::class, 'index'])->name('index');
            Route::get('/create', [TagController::class, 'create'])->name('create');
            Route::post('/create', [TagController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [TagController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [TagController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [TagController::class, 'destroy'])->name('destroy');
        });

        Route::group(['prefix' => 'post', 'as' => 'post.'], function(){
            Route::get('/', [PostController::class, 'index'])->name('index');
            Route::get('/create', [PostController::class, 'create'])->name('create');
            Route::post('/create', [PostController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [PostController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [PostController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [PostController::class, 'destroy'])->name('destroy');
        });
  
    
});


