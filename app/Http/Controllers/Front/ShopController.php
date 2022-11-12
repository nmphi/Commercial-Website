<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Product\ProductServiceInterface;
use App\Services\ProductComment\ProductCommentServiceInterface;
use App\Services\ProductCategory\ProductCategoryServiceInterface;
use App\Services\Brand\BrandServiceInterface;

class ShopController extends Controller
{
    //
    private $productService;
    private $productCommentService;
    private $productCategoryService;
    private $brandService;
    public function __construct(ProductServiceInterface $productService, ProductCommentServiceInterface $productCommentService, ProductCategoryServiceInterface $productCategoryService, BrandServiceInterface $brandService){
        $this->productService = $productService;
        $this->productCommentService = $productCommentService;
        $this->productCategoryService = $productCategoryService;
        $this->brandService = $brandService;

    }
    public function show($id){
        $products =$this->productService->find($id);
        $relatedProducts = $this->productService->getRelatedProduct($products);
        return view('front.shop.show', compact('products', 'relatedProducts'));
    }
    public function postComment(Request $request){
        $this->productCommentService->create($request->all());
        return redirect()->back();
        

    }
    public function index(Request $request){
        $categories = $this->productCategoryService->all();
        $products =$this->productService->getProductOnIndex($request);
        $brands = $this->brandService->all();
        return view('front.shop.index', compact('products', 'categories', 'brands'));

    }
    public function category($categoryName, Request $request){
        $categories = $this->productCategoryService->all();
        $products =$this->productService->getProductByCategory($categoryName, $request);
        return view('front.shop.index', compact('products', 'categories'));

    }
}
