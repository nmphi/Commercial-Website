<?php
namespace App\Services\Product;
use App\Services\ServicesInterface;

interface ProductServiceInterface extends ServicesInterface{
    public function getProductOnIndex();
    public function getRelatedProduct($product);

}