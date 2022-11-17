<?php


namespace App\Repositories\Order;

use App\Models\Order;
use App\Repositories\BaseRepositories;

class OrderRepository extends BaseRepositories implements OrderRepositoryInterface {
    public function getModel()
    {
        return Order::class;
    }

}