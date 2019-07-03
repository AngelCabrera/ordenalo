<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $table = "restaurants";

    protected $fillable = ['name', 'address', 'webpage', 'phone', 'description','rif','user_id','email', 'status'];

    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function products(){
    	return $this ->hasMany('App\Product');
    }
}