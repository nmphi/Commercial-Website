<?php
namespace App\Services\OrderDetail;

use App\Services\BaseServices;
use App\Repositories\OrderDetail\OrderDetailRepositoryInterface;

class OrderDetailService extends BaseServices implements OrderDetailServiceInterface{
    public $repository;
    public function __construct(OrderDetailRepositoryInterface $ProductRepositoryInterface) { 
        $this->repository = $ProductRepositoryInterface;
    }
}