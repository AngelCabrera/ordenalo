<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    protected $fillable = ['user_id','status', 'category_id', 'restaurant_id', 'title', 'description', 'pricing'];

    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function restaurant(){
    	return $this->belongsTo('App\Restaurant');
    }
    public function paypalItem(){
        return \PaypalPayment::item()->setName($this->title)
                                ->setDescription($this->description)
                                ->setCurrency('USD')
                                ->setQuantity(1)
                                ->setPrice($this->pricing);
    }
}