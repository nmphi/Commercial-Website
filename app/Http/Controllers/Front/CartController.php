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
        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->price,
            'weight'=>$product->weight,
            'options' => [
                'images' =>$product->product_image,
            ]

        ]);
        return back();

        

    }
    public function index(){
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();
        return view('front.shop.cart', compact('carts', 'total', 'subtotal'));
    }
}
