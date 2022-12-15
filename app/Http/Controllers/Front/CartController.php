<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Services\Product\ProductServiceInterface;

class CartController extends Controller
{
    //
    private $productService;
    public function __construct(ProductServiceInterface $productService){
        $this->productService = $productService;
    }
    public function add($id){
        $product = $this->productService->find($id);
        $price = 0;
        if($product->discount or $product->discount == 0)
        {
            $price = $product->price;

        }
        else $price = $product->discount;
        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => 1,
            'price' =>$price,
            'weight'=>$product->weight ?? 0,
            'options' => [
                'images' =>$product->product_image,
            ]

        ]);
        return back();

        

    }
    public function delete($rowId){
       
        
        Cart::remove($rowId);
       
        return back();

        

    }
    public function increaseQty($rowId){
        $product = Cart::get($rowId);
        $qty = $product->qty+1;
        Cart::update($rowId, $qty);
        return back();
    }
    public function decreaseQty($rowId){
        $product = Cart::get($rowId);
        $qty = $product->qty-1;
        Cart::update($rowId, $qty);
        return back();
    }
    public function index(){
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();
        return view('front.shop.cart', compact('carts', 'total', 'subtotal'));
    }
}
