<?php


namespace App\Repositories\Product;

use App\Models\Product;
use App\Repositories\BaseRepositories;

class ProductRepository extends BaseRepositories implements ProductRepositoryInterface {
    public function getModel()
    {
        return Product::class;
    }
    public function getRelatedProduct($product){
        return $this->model->where('product_category_id',$product->product_category_id)->get(); 
    }
    public function getProductOnIndex(){
        $products = $this->model->paginate(3);
        return $products;
    }
}