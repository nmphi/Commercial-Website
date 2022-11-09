<?php
namespace App\Services\ProductComment;

use App\Services\BaseServices;
use App\Repositories\ProductComment\ProductCommentRepositoryInterface;

class ProductCommentService extends BaseServices implements ProductCommentServiceInterface{
    public $repository;
    public function __construct(ProductCommentRepositoryInterface $ProductRepositoryInterface) { 
        $this->repository = $ProductRepositoryInterface;
    }
}