<?php
use App\Http\Controllers\ProductController;
//Illuminate\Support\Facades\Route::view('/{any}', 'welcome')->where('any', '.*');



Route::get('/', [ProductController::class, 'create'])->name('product.create');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/showall', [ProductController::class, 'showall'])->name('product.showall');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');  // Edit product form
Route::put('/products/{id}', [ProductController::class, 'update'])->name('product.update');  // Update product
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('product.destroy');  // Delete prod