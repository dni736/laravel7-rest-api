<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = ['name', 'price', 'category_id'];
	
	public function category()
	{
		return $this->belongsTo(Category::class);
	}
}

/*
// Get all records
Product::all()

// Limit the record
Product::take(3)->get()

// Get all record (as array) using 'all' collection method
Product::take(3)->get()->all()

// Get first record using 'first' collection method
Product::take(3)->get()->first()

// Get last record using 'last' collection method
Product::take(3)->get()->last()

// Get the first record
Product::first()

// Get record by id
Product::find(1)
Product::find([1, 2, 3])

// Using where
Product::where('price', 300)->first()
Product::where('price', 300)->get()
Product::wherePrice(300)->first()
Product::wherePrice(300)->get()

// Create a new record using save method
$product = new Product
$product->name = "Product 1"
$product->price = 300
$product->category_id = 3
$product->save()

// Create a new record using create method
$product = [
	'name' => "Product 3",
	'price' => 3000,
	'category_id' => 1,
];
Product::create($product)

// Update record using save method
$product = Product::first()
$product->price = 3000
$product->save()

// Mass update using update method
$products->update([
	'name' => "Best seller product",
	'price' => 3000
]);

// delete a record
$product->delete()

// delete record without instanciate a model
Product::destroy(1)
Product::destroy([1, 2, 3])
*/