<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;
use App\Restaurant;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check() && (Auth::user()->id == '1' || Auth::user()->type != '1')){
            $products = Product::all();
            return view("products.index", ["products" => $products]);
        }
        else
            return redirect ("/");
        //Retorna la pagina principal de los productos
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product= new Product;
        return view ("products.create", ["product"=>$product]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hasFile = $request->hasFile('cover') && $request->cover->isValid();
        $product = new Product;
        $product->title = $request->title; 
        $product->description = $request->description;
        $product->pricing = $request->pricing;
        $product->status = $request->status;
        $product->user_id = Auth::user()->id; //Registramos el usuario logueado.
        $restaurants = Restaurant::all();
        foreach ($restaurants as $restaurant){
            if($restaurant->user_id == Auth::user()->id){
                 $product->restaurant_id = $restaurant->id;
            }
        }
        
        if($hasFile){
            $extension = $request->cover->extension();
            $product->extension = $extension;
        }
        if($product->save()){
            if($hasFile){
                $request->cover->storeAs('images',"$product->id.$extension");
            }
            return redirect("/products")->with('success', 'La información del producto ha sido registrada correctamente!');
        }
        else{
            return view ("products.create",["product" => $product]);
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
        $product = Product::find($id);

        return view('products.show',["product" => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $product= Product::find($id);
        return view ("products.edit", ["product"=>$product]);
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
        $hasFile = $request->hasFile('cover') && $request->cover->isValid();
        $product = Product::find($id);
        $product->status = $request->status;
        $product->title = $request->title; 
        $product->description = $request->description;
        $product->pricing = $request->pricing; 

        if($hasFile){
            $extension = $request->cover->extension();
            $product->extension = $extension;
        }
        if($product->save()){
            if($hasFile){
                $request->cover->storeAs('images',"$product->id.$extension");
            }
            return redirect("/products")->with('success', 'La información del producto ha sido actualizada correctamente!');
        }
        else{
            return view ("products.edit",["product" => $product]);
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
        Product::destroy($id);

        return redirect('/products')->with('success', 'La información del producto ha sido eliminada correctamente!');
    }
}