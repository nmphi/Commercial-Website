<?php

namespace App\Http\Controllers\Front;
use App\Services\Order\OrderServiceInterface;
use App\Services\OrderDetail\OrderDetailServiceInterface;
use App\Http\Controllers\Controller;
use App\Utilities\Constant;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckOutController extends Controller
{
    private $orderService;
    private $orderDetailService;
    public function __construct(OrderServiceInterface $orderService, OrderDetailServiceInterface $orderDetailService){
        $this->orderService = $orderService;
        $this->orderDetailService = $orderDetailService;

    }
    public function index(){
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();
        return view('front.checkout.index', compact('carts', 'total', 'subtotal'));
    }
    public function addOder(Request $request){
        // Thêm đơn hàng 
        $data = $request->all();
        $data['status'] = Constant::order_status_ReceiveOrders;

        $order = $this->orderService->create($data);
        // Thêm chi tiết đơn hàng
        $carts = Cart::content();
        foreach ($carts as $cart){
            $data = [
                'order_id' => $order->id,
                'product_id'=> $cart->id,
                'qty'=>$cart->qty,
                'amount'=>$cart->price,
                'total' =>$cart->qty*$cart->price,
            ];
            $this->orderDetailService->create($data);
        }
        // Xóa giỏ hàng 
        Cart::destroy();
        // Trả về kết quả
        return redirect('checkout/result')->with('notification', 'Success');
    }
    public function result() {
        $notification = session('notification');
        return view('front.checkout.result', compact('notification'));
    }
}
