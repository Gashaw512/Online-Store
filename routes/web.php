<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
// use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/add_product', function(){
    return view('products.add');
});

Route::post('/save', [ProductController::class, "add_product"]);
// Route::post('/users', [ProductController::class, "add_product"]);

// Admin action
Route::get('/stores', [AdminController::class, "stores"]);
Route::get('/admin', [AdminController::class, "adminAdd"]);
Route::get('/customerList', [AdminController::class, "showCustomer"]);;
Route::get('/productList', [AdminController::class, "showProduct"]);
Route::get('/delateProduct/{id}', [AdminController::class, "delateProduct"]);


Route::get('/home', [HomeController::class, 'redirect']); // it is executed after use is loged in

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
