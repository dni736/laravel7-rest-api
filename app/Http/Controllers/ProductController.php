<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('name')->get();
        return ProductResource::collection($products);
    }

    public function show(Product $product)
    {
        return new ProductResource($product);
    }

    public function store()
    {
        // validation goes here
        $data = request()->all();

        $product = Product::create($data); 

        return new ProductResource($product);
    }
    
    public function update(Product $product)
    {
        // validation goes here
        $data = request()->all();

        $product->update($data); 

        return new ProductResource($product);
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return response()->noContent();
    }
}
