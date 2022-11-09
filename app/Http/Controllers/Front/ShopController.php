<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Product\ProductServiceInterface;
use App\Services\ProductComment\ProductCommentServiceInterface;

class ShopController extends Controller
{
    //
    private $productService;
    private $productCommentService;
    public function __construct(ProductServiceInterface $productService, ProductCommentServiceInterface $productCommentService){
        $this->productService = $productService;
        $this->productCommentService = $productCommentService;

    }
    public function show($id){
        $products =$this->productService->find($id);
        return view('front.shop.show', compact('products'));
    }
    public function postComment(Request $request){
        $this->productCommentService->create($request->all());
        return redirect()->back();
        

    }
}
