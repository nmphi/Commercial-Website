<?php
namespace App\Services\Order;

use App\Services\BaseServices;
use App\Repositories\Order\OrderRepositoryInterface;

class OrderService extends BaseServices implements OrderServiceInterface{
    public $repository;
    public function __construct(OrderRepositoryInterface $ProductRepositoryInterface) { 
        $this->repository = $ProductRepositoryInterface;
    }

    public function getOrderByUserId($userId)
    {
        return $this->repository->getOrderByUserId($userId);
    }
}