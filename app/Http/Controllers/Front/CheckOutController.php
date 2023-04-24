<?php

namespace App\Http\Controllers\Front;
use App\Services\Product\ProductServiceInterface;
use App\Services\Order\OrderServiceInterface;
use App\Services\OrderDetail\OrderDetailServiceInterface;
use App\Http\Controllers\Controller;
use App\Utilities\Constant;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Mail;

class CheckOutController extends Controller
{
    private $orderService;
    private $orderDetailService;
    private $productService;
    public function __construct(
        OrderServiceInterface $orderService,
        OrderDetailServiceInterface $orderDetailService,
        ProductServiceInterface $productService){
        $this->orderService = $orderService;
        $this->orderDetailService = $orderDetailService;
        $this->productService = $productService;

    }
    public function index(){
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();
        return view('front.checkout.index', compact('carts', 'total', 'subtotal'));
    }
    public function addOder(Request $request){
        
        
        $carts = Cart::content();
        foreach ($carts as $cart){
            $product = $this->productService->find($cart->id);
        // Kiểm tra số lượng
        if ($product->qty < $cart->qty) {
            return redirect('checkout/result')->with('notification', 'FAIL TO PURCHASE '.$product->name.' only have '.$product->qty.' left');

        }}
        // Thêm đơn hàng 
        $data = $request->all();
        $data['status'] = Constant::order_status_ReceiveOrders;
        $order = $this->orderService->create($data);
        // Thêm chi tiết đơn hàng
        foreach ($carts as $cart){
            $data = [
                'order_id' => $order->id,
                'product_id'=> $cart->id,
                'qty'=>$cart->qty,
                'amount'=>$cart->price,
                'total' =>$cart->qty*$cart->price,
            ];
            
            $product = $this->productService->find($cart->id);
            $newQuantity = $product->qty - $cart->qty;
            $this->productService->update([
                'qty' => $newQuantity,
            ], $cart->id);
            $this->orderDetailService->create($data);
            ;
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
