<?php

use App\Actions\Fortify\CreateNewUser;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/home', [HomeController::class, 'redirect'])->name('home');
    Route::get('/add_product', function(){
        return view('products.add');
    });
Route::get('clothes',[CategoryController::class,'viewCloth']);
Route::get('electronics',[CategoryController::class,'viewElectronic']);
Route::get('shoes',[CategoryController::class,'viewShoes']);
Route::get('watches',[CategoryController::class,'viewWatches']);
Route::get('jewellery',[CategoryController::class,'viewJewellery']);
Route::get('sport',[CategoryController::class,'viewSport']);
Route::get('kids',[CategoryController::class,'viewKids']);
Route::get('/stores', [AdminController::class, "stores"]);
Route::get('/admin', [AdminController::class, "adminAdd"]);
Route::get('/customerList', [AdminController::class, "showCustomer"]);;
Route::get('/productList', [AdminController::class, "showProduct"]);
Route::get('/delateProduct/{id}', [AdminController::class, "delateProduct"]);
Route::post('/saveProduct', [ProductController::class, "add_product"]);
Route::get('/updateView', [ProductController::class, "updateView"]);
});

