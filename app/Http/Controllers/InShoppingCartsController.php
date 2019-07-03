<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ShoppingCart;
use App\InShoppingCart;

class InShoppingCartsController extends Controller
{
    public function store(Request $request)
    {
            $shopping_cart_id = \Session::get('shopping_cart_id');

            $shopping_cart = ShoppingCart::findOrCreateBySessionID($shopping_cart_id);

            $response = InShoppingCart::create([
            	"shopping_cart_id" => $shopping_cart_id,
            	"product_id" => $request->product_id
            ]);

            if($request->ajax()){
                return response()->json([
                    'products_count' => InShoppingCart::productsCount($shopping_cart_id)
                    ]);
            }

            if ($response){
            	return back();
            }
            else{
            	return back();
            }

    }
    public function destroy($id)
    {
        //
    }
            
}
