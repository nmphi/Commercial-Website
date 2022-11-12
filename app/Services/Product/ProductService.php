<?php
namespace App\Services\Product;

use App\Services\BaseServices;
use App\Repositories\Product\ProductRepositoryInterface;

class ProductService extends BaseServices implements ProductServiceInterface{
    public $repository;
    public function __construct(ProductRepositoryInterface $repository){
        $this->repository = $repository;
    }
    public function find(int $id){

        $product =$this->repository->find($id);


        $avgRating = 0;
        $sumRating = array_sum(array_column($product->product_comment->toArray(), 'rating'));
        $countRating = count($product->product_comment);
        if ($countRating != 0){
            $avgRating = $sumRating/$countRating;
        }
        $product->avgRating = $avgRating;
        return $product;
    }
    public function getProductOnIndex($request){
        return $this->repository->getProductOnIndex($request);
    }
    public function getRelatedProduct($product){
        return $this->repository->getRelatedProduct($product);
    }
    public function getProductByCategory($categoryName, $request){
        return $this->repository->getProductByCategory($categoryName, $request);
    }
}