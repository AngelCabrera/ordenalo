<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;

class AllRestaurantsController extends Controller
{

   	public function index(){

		$search = \Request::get('search');
		if($search != ''){
	        $restaurants = Restaurant::where('description','like','%'.$search.'%')->orderBy('id')->paginate(5);
	 

			return view('restaurants.allrestaurants', ["restaurants" => $restaurants]);	
		}
		else{
				$search = \Request::get('search1');
			if($search != ''){
				$restaurants = Restaurant::where('name','like','%'.$search.'%')->orderBy('id')->paginate(5);

				return view('restaurants.allrestaurants', ["restaurants" => $restaurants]);
			}
			else{
				$search = \Request::get('search2');
				$restaurants = Restaurant::where('address','like','%'.$search.'%')->orderBy('id')->paginate(5);

				return view('restaurants.allrestaurants', ["restaurants" => $restaurants]);
			}

		}
	}
}