<?php

namespace App\Http\Controllers;
use App\Order;
use App\ShoppingCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware("auth");

    }
    public function index()
    {
        if(Auth::check()){
            $orders = Order::all();
            return view("orders.index", ["orders" => $orders]);
        }
        else
            return redirect ("/");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $order= new Order;
        return view ("orders.create", ["order"=>$order]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $shopping_cart_id = \Session::get('shopping_cart_id');
        $shopping_cart = ShoppingCart::findOrCreateBySessionID($shopping_cart_id);

        $order = new order;
        $order->shopping_cart_id = $shopping_cart_id;
        $order->line1 = $request->line1;
        $order->user_id = Auth::user()->id;
        $order->total = $shopping_cart->total();
        
        if($order->save()){
            $order->sendMail();
            \Session::remove('shopping_cart_id');
            return redirect('/orders/'.$order->id);
        }
        else{
            return view ("orders.create",["order" => $order]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);
        $this->products = $order->shopping_cart->products()->get();
        if($order->user_id == Auth::user()->id){
            return view("shopping_carts.completed",["order" => $order, "products" => $this->products]);
        }
        else
            return redirect ('/');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id);
        return view ("orders.edit", ["order"=>$order]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::find($id);

        $order->status = $request->status; 
        $order->line1 = $request->line1;
        $order->guide_number = $request->guide_number;
        if($order->save()){
            return redirect("/orders");
        }
        else{
            return view ("orders.edit",["order" => $order]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
