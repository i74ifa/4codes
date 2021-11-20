<?php

use App\Models\DashboardSetting;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\ProductController::class, 'all']);
Route::get('item/{id}', [App\Http\Controllers\ProductController::class, 'singleProduct'])->name('product.details');

Route::get('item/order/{id}', [App\Http\Controllers\ViewerController::class, 'order'])->name('product.order');

// Dashboard
Route::prefix('dashboard')->name('dashboard.')->middleware('role')->group(function() {
    Route::prefix('category')->name('category.')->group(function() {
        Route::get('create', [App\Http\Controllers\CategoryController::class, 'show'])->name('createShow');
        Route::get('all', [App\Http\Controllers\CategoryController::class, 'all'])->name('all');
        Route::get('/{id}', [App\Http\Controllers\CategoryController::class, 'byId'])->name('byId');

        Route::post('create', [App\Http\Controllers\CategoryController::class, 'create'])->name('create');
    });

    Route::prefix('products')->name('products.')->group(function() {
        Route::post('create', [App\Http\Controllers\Dashboard\ProductController::class, 'create'])->name('create');
        Route::get('create', [App\Http\Controllers\Dashboard\ProductController::class, 'createShow'])->name('createShow');
        Route::post('delete/{id?}', [App\Http\Controllers\Dashboard\ProductController::class, 'delete'])->name('delete');
        Route::get('search', [App\Http\Controllers\Dashboard\ProductController::class, 'search'])->name('search');
        Route::get('all', [App\Http\Controllers\Dashboard\ProductController::class, 'all'])->name('all');
    });
    Route::get('/', [App\Http\Controllers\DashboardController::class, 'show'])->name('dashboard');
    Route::get('settings', [App\Http\Controllers\DashboardController::class, 'settings'])->name('settings');
    Route::post('settings', [App\Http\Controllers\DashboardController::class, 'changeLogo'])->name('changeLogo');
    Route::post('popular-product', [App\Http\Controllers\DashboardController::class, 'popularProduct'])->name('popularProduct');
});

require __DIR__.'/auth.php';
