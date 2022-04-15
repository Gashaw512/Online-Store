<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
// use App\Models\Product;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/add_product', function(){
    return view('products.add');
});
Route::post('/save', [ProductController::class, "add_product"]);
    // $product = new Product();
    // $product->name = request('name');
    // $product->quantity = request('quantity');
    // $product->price = request('price');

    // if(request()->hasFile(request('product_image'))){

    // }
    // $product->product_image = request('product_image');
    // $product->category = request('category');
    // return $product;
    // $product->save();


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
