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

Route::group(['prefix' => 'categories'], function () {
    Route::get('/', \App\Http\Controllers\Category\IndexController::class)->name('category.index');
    Route::get('/create', \App\Http\Controllers\Category\CreateController::class)->name('category.create');
    Route::post('/', \App\Http\Controllers\Category\StoreController::class)->name('category.store');
    Route::get('/{category}', \App\Http\Controllers\Category\ShowController::class)->name('category.show');
    Route::get('/{category}/edit', \App\Http\Controllers\Category\EditController::class)->name('category.edit');
    Route::patch('/{category}', \App\Http\Controllers\Category\UpdateController::class)->name('category.update');
    Route::delete('/{category}', \App\Http\Controllers\Category\DestroyController::class)->name('category.destroy');
});

Route::group(['prefix' => 'items'], function () {
    Route::get('/', \App\Http\Controllers\Item\IndexController::class)->name('item.index');
    Route::get('/create', \App\Http\Controllers\Item\CreateController::class)->name('item.create');
    Route::post('/', \App\Http\Controllers\Item\StoreController::class)->name('item.store');
    Route::get('/{item}', \App\Http\Controllers\Item\ShowController::class)->name('item.show');
    Route::get('/{item}/edit', \App\Http\Controllers\Item\EditController::class)->name('item.edit');
    Route::patch('/{item}', \App\Http\Controllers\Item\UpdateController::class)->name('item.update');
    Route::delete('/{item}', \App\Http\Controllers\Item\DestroyController::class)->name('item.destroy');
});
