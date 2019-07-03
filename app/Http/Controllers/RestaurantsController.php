<?php

namespace App\Http\Controllers;
use App\Restaurant;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class RestaurantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::paginate('1');
        return view("restaurants.index", ["restaurants" => $restaurants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $restaurant= new Restaurant;
        return view ("restaurants.create", ["restaurant"=>$restaurant]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $restaurant = new restaurant;

        $hasFile = $request->hasFile('cover') && $request->cover->isValid();
        $restaurant->name = $request->name;
        $restaurant->address = $request->address;
        $restaurant->phone = $request->phone;
        $restaurant->email = $request->email;
        $restaurant->status = $request->status;
        $restaurant->webPage = $request->webPage;
        $restaurant->rif = $request->rif; 
        $restaurant->description = $request->description;
        $restaurant->user_id = Auth::user()->id;
        
        if($hasFile){
            $extension = $request->cover->extension();
            $restaurant->extension = $extension;
        }

        if($restaurant->save()){
            if($hasFile){
                $request->cover->storeAs('images1',"$restaurant->id.$extension");
            }
            return redirect("/restaurants")->with('success', 'El restaurant ha sido registrado correctamente!');
        }
        else{
            return view ("restaurants.create",["restaurant" => $restaurant]);
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
        $restaurant = Restaurant::find($id);
        $products = Product::all();
        return view('restaurants.show',["restaurant" => $restaurant, "products" => $products]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $restaurant= restaurant::find($id);
        return view ("restaurants.edit", ["restaurant"=>$restaurant]);
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
        $restaurant = restaurant::find($id);

        $restaurant->name = $request->name;
        $restaurant->address=$request->address;
        $restaurant->phone=$request->phone;
        $restaurant->status = $request->status;
        $restaurant->email = $request->email;
        $restaurant->webPage=$request->webPage;
        $restaurant->rif=$request->rif;
        $restaurant->description = $request->description;
        if($hasFile){
            $extension = $request->cover->extension();
            $restaurant->extension = $extension;
        }

        if($restaurant->save()){
            if($hasFile){
                $request->cover->storeAs('images1',"$restaurant->id.$extension");
            }
            return redirect("/restaurants")->with('success', 'La información del restaurant ha sido actualizada correctamente!');
        }
        else{
            return view ("restaurants.edit",["restaurant" => $restaurant]);
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
        Restaurant::destroy($id);

        return redirect('/restaurants')->with('success', 'La información del restaurant ha sido eliminada!');
    }
}
    