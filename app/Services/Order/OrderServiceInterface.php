<?php
namespace App\Services\Order;
use App\Services\ServicesInterface;

interface OrderServiceInterface extends ServicesInterface{
    public function getOrderByUserId($userId);
}