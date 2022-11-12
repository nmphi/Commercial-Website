<?php
namespace App\Repositories\Product;
use App\Repositories\RepositoriesInterface;

interface ProductRepositoryInterface extends RepositoriesInterface{
    public function getProductOnIndex($request);
    public function getRelatedProduct($product);
    public function getProductByCategory($categoryName, $request);

}