<?php

namespace App\Providers;
//Product
use App\Repositories\Product\ProductRepository;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Services\Product\ProductService;
use App\Services\Product\ProductServiceInterface;

//ProductComment
use App\Repositories\ProductComment\ProductCommentRepository;
use App\Repositories\ProductComment\ProductCommentRepositoryInterface;
use App\Services\ProductComment\ProductCommentService;
use App\Services\ProductComment\ProductCommentServiceInterface;


//ProductCategory
use App\Repositories\ProductCategory\ProductCategoryRepository;
use App\Repositories\ProductCategory\ProductCategoryRepositoryInterface;
use App\Services\ProductCategory\ProductCategoryService;
use App\Services\ProductCategory\ProductCategoryServiceInterface;


//Brand
use App\Repositories\Brand\BrandRepository;
use App\Repositories\Brand\BrandRepositoryInterface;
use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryInterface;
use App\Services\Brand\BrandService;
use App\Services\Brand\BrandServiceInterface;
use App\Services\User\UserService;
use App\Services\User\UserServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //Product
        $this->app->singleton(
            ProductRepositoryInterface::class,
            ProductRepository::class

        );
        $this->app->singleton(
            ProductServiceInterface::class,
            ProductService::class

        );



        //ProductComment
        $this->app->singleton(
            ProductCommentRepositoryInterface::class,
            ProductCommentRepository::class

        );
        $this->app->singleton(
            ProductCommentServiceInterface::class,
            ProductCommentService::class

        );


        //ProductCategory
        $this->app->singleton(
            ProductCategoryRepositoryInterface::class,
            ProductCategoryRepository::class

        );
        $this->app->singleton(
            ProductCategoryServiceInterface::class,
            ProductCategoryService::class

        );

        //Brand
        $this->app->singleton(
            BrandRepositoryInterface::class,
            BrandRepository::class

        );
        $this->app->singleton(
            BrandServiceInterface::class,
            BrandService::class

        );

        //User
        $this->app->singleton(
            UserRepositoryInterface::class,
            UserRepository::class,
        );
        $this->app->singleton(
            UserServiceInterface::class,
            UserService::class,
        );
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
