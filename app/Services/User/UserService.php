<?php
namespace App\Services\User;

use App\Services\BaseServices;
use App\Repositories\User\UserRepositoryInterface;

class UserService extends BaseServices implements UserServiceInterface{
    public $repository;
    public function __construct(UserRepositoryInterface $UserRepositoryInterface) { 
        $this->repository = $UserRepositoryInterface;
    }
}