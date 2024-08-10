<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',\App\Http\Controllers\IndexController::class)->name('index');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/',\App\Http\Controllers\Admin\IndexController::class)->name('admin.index');

    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', \App\Http\Controllers\Admin\Category\IndexController::class)->name('admin.category.index');
        Route::get('/create', \App\Http\Controllers\Admin\Category\CreateController::class)->name('admin.category.create');
        Route::post('/', \App\Http\Controllers\Admin\Category\StoreController::class)->name('admin.category.store');
        Route::get('/{category}/edit', \App\Http\Controllers\Admin\Category\EditController::class)->name('admin.category.edit');
        Route::patch('/{category}', \App\Http\Controllers\Admin\Category\UpdateController::class)->name('admin.category.update');
        Route::delete('/{category}', \App\Http\Controllers\Admin\Category\DestroyController::class)->name('admin.category.destroy');
    });
    Route::group(['prefix' => 'items'], function () {
        Route::get('/', \App\Http\Controllers\Admin\Item\IndexController::class)->name('admin.item.index');
        Route::get('/create', \App\Http\Controllers\Admin\Item\CreateController::class)->name('admin.item.create');
        Route::post('/', \App\Http\Controllers\Admin\Item\StoreController::class)->name('admin.item.store');
        Route::get('/{item}', \App\Http\Controllers\Admin\Item\ShowController::class)->name('admin.item.show');
        Route::get('/{item}/edit', \App\Http\Controllers\Admin\Item\EditController::class)->name('admin.item.edit');
        Route::patch('/{item}', \App\Http\Controllers\Admin\Item\UpdateController::class)->name('admin.item.update');
        Route::delete('/{item}', \App\Http\Controllers\Admin\Item\DestroyController::class)->name('admin.item.destroy');
    });
    Route::group(['prefix' => 'colors'], function () {
        Route::get('/', \App\Http\Controllers\Admin\Color\IndexController::class)->name('admin.color.index');
        Route::get('/create', \App\Http\Controllers\Admin\Color\CreateController::class)->name('admin.color.create');
        Route::post('/', \App\Http\Controllers\Admin\Color\StoreController::class)->name('admin.color.store');
        Route::get('/{color}/edit', \App\Http\Controllers\Admin\Color\EditController::class)->name('admin.color.edit');
        Route::patch('/{color}', \App\Http\Controllers\Admin\Color\UpdateController::class)->name('admin.color.update');
        Route::delete('/{color}', \App\Http\Controllers\Admin\Color\DestroyController::class)->name('admin.color.destroy');
    });
});


