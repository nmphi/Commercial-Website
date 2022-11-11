<?php
namespace App\Repositories\Product;
use App\Repositories\RepositoriesInterface;

interface ProductRepositoryInterface extends RepositoriesInterface{
    public function getProductOnIndex();
    public function getRelatedProduct($product);

}