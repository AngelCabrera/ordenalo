<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Mail\OrderCreated;
use Illuminate\Support\Facades\Mail;

class Order extends Model
{
    protected $table = "orders";
    
    protected $fillable = ['shopping_cart_id','line1','user_id','status','guide_number','total'];

    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function sendMail(){
    	Mail::to("angelalejandrojose@gmail.com")->send(new OrderCreated($this));
    }
    public function shopping_cart(){
    	return $this->belongsTo('App\ShoppingCart');
    }
}
