<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    //
    public function login()
    {
        return view('front.account.login-register');
    }

    public function checkLogin(Request $request)
    {
        $sredentials = [
            'email'=> $request->email,
            'password'=> $request->password,
            'level'=> 2, //normal user
        ];

        $remember = $request->remember;

        if(Auth::attempt($sredentials, $remember)) {
           return redirect('');
           
        } else {
            return back()
                ->with('notification', 'ERROR: Email or Password is wrong');

        }
    }


}
