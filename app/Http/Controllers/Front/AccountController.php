<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Services\User\UserServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{   
    private $userService;

    public function __construct(UserServiceInterface $userService) {
        $this->userService = $userService;      
    }



    //
    public function login()
    {
        return view('front.account.login');
    }

    public function checkLogin(Request $request)
    {
        $credentials = [
            'email'=> $request->email,
            'password'=> $request->password,
            'level'=> 2, //normal user
        ];

        $remember = $request->remember;

        if(Auth::attempt($credentials, $remember)) {
           return redirect('shop');
           
        } else {
            return back()
                ->with('notifications', 'ERROR: Email or Password is wrong');
        }
    }

    public function logout() 
    {
        Auth::logout();
                return back();
    }

    public function register()
    {
        return view('front.account.register');
    }

    public function postRegister(Request $request) {
        if ($request->password != $request->password_confirmation) {
            return back() 
                ->with('notification', 'ERROR: Confirm Password not match');
        }

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'level' => 2,
        ];

        $this->userService->create($data);

        return back()
            ->with('notification', 'Registered Success! Now you can login');
    }
}