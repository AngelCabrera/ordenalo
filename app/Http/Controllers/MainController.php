<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;


class MainController extends Controller
{
	public function home(){
		return view('main.home');
	}
	public function propietarios(){
		return view('main.propietarios');
	}
	public function contacto(){
		return view('main.contacto');
	}
}
