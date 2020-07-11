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

Route::get('/', function () {
    // return redirect('categories');
    return view('welcome');
});

Route::get('/products', function () {
    // return request()->page;
    // return request('page');
    // return request()->only('per_page', 'dir');
    // return request()->except('per_page', 'dir');
    return "<h1>All Products</h1>";
});

Route::get('/products/create', function () {
    return "<h1>Add new product</h1>";
});

Route::get('/products/{product}', function ($product) {
    return "<h1>Product {$product}</h1>";
});

Route::get('/categories', function () {
    return response()->json(["Category 1", "Category 2"]);
    // return ["Category 1", "Category 2"];
});
