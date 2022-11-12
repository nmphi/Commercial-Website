<?php
namespace App\Services\ProductCategory;

use App\Services\BaseServices;
use App\Repositories\ProductCategory\ProductCategoryRepositoryInterface;

class ProductCategoryService extends BaseServices implements ProductCategoryServiceInterface{
    public $repository;
    public function __construct(ProductCategoryRepositoryInterface $ProductCategoryRepositoryInterface) { 
        $this->repository = $ProductCategoryRepositoryInterface;
    }
}