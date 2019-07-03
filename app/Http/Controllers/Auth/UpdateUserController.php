<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    public function update(UpdateAccount $request)
    {
        $user = Auth::user();
        
        $user->name = Request::input('name');
        $user->email = Request::input('email');

        if ( ! Request::input('password') == '')
        {
            $user->password = bcrypt(Request::input('password'));
        }

        $user->save();

        Flash::message('Your account has been updated!');
        return Redirect::to('/home');
    }
}