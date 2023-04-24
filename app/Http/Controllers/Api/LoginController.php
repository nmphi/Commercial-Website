<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\Order\OrderServiceInterface;
use App\Services\User\UserServiceInterface;
use App\Utilities\Constant;
use App\Models\User;
class LoginController extends Controller
{
    //
    private $userService;
    private $orderService;

    public function __construct(UserServiceInterface $userService, OrderServiceInterface $orderService) {
        $this->userService = $userService;      
        $this->orderService = $orderService;
    }
    public function login(Request $request){
        $credentials = [
            'email'=> $request->email,
            'password'=> $request->password,
        ];
        $user = User::select('id', 'name', 'email')->where('email', $credentials['email'])->first();
        if(Auth::attempt($credentials)) {
            return response()->json(['message'=> 'Login Success',
                                     'user'=> $user]);
           
        } else {
            return response()->json(['message'=> 'Failed']);
        }        
        
    }
    public function register(Request $request) {
        $user = $this->userService->all();
        foreach ($user as $user){
            if ($request->email == $user->email) {
                return response()->json(['message'=> 'Email is used']);
        } 
        }
        
        
       

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'level' => Constant::user_level_client,
        ];

        $this->userService->create($data);

        return response()->json(['message'=> 'Register Success']);
    }
}
