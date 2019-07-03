<?php

namespace App\Http\Controllers;
use App\Paypal;
use Illuminate\Http\Request;
use App\ShoppingCart;
use App\Order;
use App\Mail\OrderCreated;
use Illuminate\Support\Facades\Mail;

class ShoppingCartsController extends Controller
{
    public function index(){

    	$shopping_cart_id = \Session::get('shopping_cart_id');

        $shopping_cart = ShoppingCart::findOrCreateBySessionID($shopping_cart_id);
/*
        $paypal = new Paypal ($shopping_cart);

        $paypal->generate();

        return "";
*/
        $products = $shopping_cart->products()->get();

        $total = $shopping_cart->total();

        return view ("shopping_carts.index", ["products" => $products, "total" => $total]);
    }

    public function create(){
        $order= new Order;
        return view("shopping_carts.pay", ["order"=>$order]);
    }

    public function destroy($id){
        Product::destroy($id);
        return redirect('/carrito');
    }
}
