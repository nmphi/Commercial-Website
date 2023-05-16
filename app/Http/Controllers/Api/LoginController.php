<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\Order\OrderServiceInterface;
use App\Services\User\UserServiceInterface;
use App\Services\OrderDetail\OrderDetailServiceInterface;
use App\Utilities\Constant;
use App\Models\User;
class LoginController extends Controller
{
    //
    private $userService;
    private $orderService;
    private $orderDetailService;

    public function __construct(UserServiceInterface $userService, OrderServiceInterface $orderService, OrderDetailServiceInterface $orderDetailService) {
        $this->userService = $userService;      
        $this->orderService = $orderService;
        $this->orderDetailService = $orderDetailService;
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
    public function myOrderShow($id) {
        $orders = Order::select('id', 'user_id', 'name','phone', 'street_address', 'status', 'created_at', 'updated_at')
        ->where('user_id', $id)->with('order_detail')->with('order_detail.product:description,id,name,price,qty')->get();
            return response()->json($orders);
       
        
    }
    public function checkout(Request $request) {
        //lấy data
        $data['country'] = $request->country;
        $data['user_id'] = $request->user_id;
        $data['name'] = $request->name;
        $data['company_name'] = $request->company_name;
        $data['street_address'] = $request->street_address;
        $data['town_city'] = $request->town_city;
        $data['postcode_zip'] = $request->postcode_zip;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['status'] = Constant::order_status_ReceiveOrders;

        $order = $this->orderService->create($data);
        $products = $request->products;
  
        foreach ($products as $product){
            $data = [
                'order_id' => $order->id,
                'product_id' => $product['product_id'],
                'qty' => $product['qty'],
                'amount' => $product['amount'],
                'total' => $product['total'],
            ];      
            $this->orderDetailService->create($data);;
        }
 
        
        if ($order){
            return response()->json(['message'=> "Success"]);

        }
    

        
        return response()->json(['message'=> "ss"]);
    }
}











