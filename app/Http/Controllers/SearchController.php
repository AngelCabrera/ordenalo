<?php

namespace App\Http\Controllers;
use App\Restaurant;
use App\Http\Request;

class SearchController extends Controller
{
    public function search(){
    	return view ('search.search');
    }
    public function autocomplete(Request $request){
    	$data = Restaurant::select("name as name")->where("name","LIKE","%{request->input('query')}%")->get();
    	return response()->json($data);
    }
}
