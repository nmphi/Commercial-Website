<?php
namespace App\Services\Brand;

use App\Services\BaseServices;
use App\Repositories\Brand\BrandRepositoryInterface;

class BrandService extends BaseServices implements BrandServiceInterface{
    public $repository;
    public function __construct(BrandRepositoryInterface $ProductRepositoryInterface) { 
        $this->repository = $ProductRepositoryInterface;
    }
}