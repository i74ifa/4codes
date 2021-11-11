<?php

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

Route::prefix('dashboard')->name('dashboard.')->group(function() {
    Route::prefix('category')->name('category.')->group(function() {
        Route::get('create', [App\Http\Controllers\CategoryController::class, 'show'])->name('createShow');
        Route::get('all', [App\Http\Controllers\CategoryController::class, 'all'])->name('all');
        Route::get('/{id}', [App\Http\Controllers\CategoryController::class, 'byId'])->name('byId');

        Route::post('create', [App\Http\Controllers\CategoryController::class, 'create'])->name('create');
    });

    Route::prefix('products')->name('products.')->group(function() {
        Route::post('create', [App\Http\Controllers\ProductController::class, 'create'])->name('create');
        Route::post('delete/{id?}', [App\Http\Controllers\ProductController::class, 'delete'])->name('delete');
    });
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
