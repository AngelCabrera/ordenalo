<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class AllProductsController extends Controller
{
   	public function index(){

		$products = Product::all();

		return view('products.allProducts', ["products" => $products]);
	}
}
