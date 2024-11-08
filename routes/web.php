<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageCrudController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('product/create',[ImageCrudController::class,'products_create'])->name('product.create');
Route::post('product/store',[ImageCrudController::class,'products_store'])->name('product.store');
Route::get('product/index',[ImageCrudController::class,'products_index'])->name('product.index');
Route::get('product/edit/{id}',[ImageCrudController::class,'products_edit'])->name('product.edit');
Route::put('product/update/{id}',[ImageCrudController::class,'products_update'])->name('product.update');
Route::delete('product/delete/{id}',[ImageCrudController::class,'product_delete'])->name('product.delete');



