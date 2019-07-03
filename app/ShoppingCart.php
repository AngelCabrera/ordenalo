<?php

namespace App;

use App\ShoppingCart;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
	protected $fillable = ['status'];


	public function in_shopping_carts(){
		return $this->hasMany("App\InShoppingCart");
	}
	public function products(){
		return $this->belongsToMany('App\Product', 'in_shopping_carts');
	}

	public function productsSize(){
		return $this->products()->count();
	}

	public function productsSize1($shopping_cart){
		return $shopping_cart->products()->count();
	}

	public function total(){
		return $this->products()->sum("pricing");
	}

	public function totalUSD(){
		$this->total()/4000;
	}

    public static function findOrCreateBySessionID($shopping_cart_id){
    	if($shopping_cart_id)
    		//Buscar el carrito
    		return ShoppingCart::findBySession($shopping_cart_id);
    	else
    		//Crear un carrito
    		return ShoppingCart::createWithoutSession();
    }

	public static function findBySession($shopping_cart_id){
		return ShoppingCart::find($shopping_cart_id);
	}

	public static function createWithoutSession(){
		return ShoppingCart::create([
			"status" => "incompleted"
		]);
	}
}
