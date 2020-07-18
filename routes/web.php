<?php

use App\Product;
use App\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\ProductResource;
use App\Http\Resources\CategoryResource;

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

Route::get('/', function () {
    // return redirect('categories');
    return view('welcome');
});

Route::get('/products', function () {
    $products = Product::orderBy('name')->get();
    return ProductResource::collection($products);
});

Route::get('/products/{product}', function (Product $product) {
    return new ProductResource($product);
});

Route::get('/categories', function () {
    $categories = Category::orderBy('name')->get();
    return CategoryResource::collection($categories);
});
