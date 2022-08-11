<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('product/index',[ProductController::class,'index'])->name("product.index");
Route::get('product/create',[ProductController::class,'create'])->name("product.create");
Route::post('product/store',[ProductController::class,'store'])->name("product.store");
Route::get('product/delete/{product}',[ProductController::class,'delete'])->name("product.delete");
Route::get('product/edit/{product}',[ProductController::class,'edit'])->name("product.edit");
Route::post('product/update',[ProductController::class,'update'])->name("product.update");
