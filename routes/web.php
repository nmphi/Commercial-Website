<?php

use Illuminate\Support\Facades\Route;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function (\App\Services\Product\ProductServiceInterface $ProductRepository) {
    //return \App\Models\Product::find(1)->product_image;
    return $ProductRepository->find(3);
});*/


//Route::get('/',function(){
//    return view('front.shop.index');
//});

// admin
// Route::prefix('admin')->group(function(){
//     Route::resource('user', App\Http\Controllers\Admin\UserController::class);
//     Route::resource('product', App\Http\Controllers\Admin\ProductController::class);
// });

//Admin
Route::prefix('admin')->middleware('CheckAdminLogin')->group(function(){
    Route::redirect('', 'admin/user');
    Route::resource('user', \App\Http\Controllers\Admin\UserController::class);
    Route::resource('product', \App\Http\Controllers\Admin\ProductController::class);
    Route::resource('category', \App\Http\Controllers\Admin\ProductCategoryController::class);
    Route::resource('brand', \App\Http\Controllers\Admin\BrandController::class);
    Route::resource('order', \App\Http\Controllers\Admin\OrderController::class);
    Route::resource('product/{product_id}/image', \App\Http\Controllers\Admin\ProductImageController::class);
    Route::resource('product/{product_id}/comment', \App\Http\Controllers\Admin\ProductCommentController::class);
    Route::prefix('login')->group(function(){
        Route::get('', [App\Http\Controllers\Admin\HomeController::class, 'getLogin'])->withoutMiddleware('CheckAdminLogin');
        Route::post('', [App\Http\Controllers\Admin\HomeController::class, 'postLogin'])->withoutMiddleware('CheckAdminLogin');

    });
    Route::get('logout',[App\Http\Controllers\Admin\HomeController::class, 'logout']);

});

// Client
Route::prefix('')->group(function(){
    Route::redirect('', 'shop');
});
Route::prefix('shop')->group(function(){
    Route::get('/product/{id}', [App\Http\Controllers\Front\ShopController::class, 'show']);
    Route::post('/product/{id}', [App\Http\Controllers\Front\ShopController::class, 'postComment']);
    Route::get('/', [App\Http\Controllers\Front\ShopController::class, 'index']);
    
});

Route::prefix('cart')->group(function(){
    Route::get('add/{id}', [App\Http\Controllers\Front\CartController::class, 'add']);
    Route::get('delete/{rowId}', [App\Http\Controllers\Front\CartController::class, 'delete']);
    Route::get('', [App\Http\Controllers\Front\CartController::class, 'index']);
    Route::get('increaseQty/{rowId}', [App\Http\Controllers\Front\CartController::class, 'increaseQty']);
    Route::get('decreaseQty/{rowId}', [App\Http\Controllers\Front\CartController::class, 'decreaseQty']);
    
    
});

Route::prefix('account')->name('account.')->group(function(){ 
    Route::get('/login', [App\Http\Controllers\Front\AccountController::class, 'login'])->name('login');
    Route::post('/login', [App\Http\Controllers\Front\AccountController::class, 'checkLogin']);

    Route::get('logout', [App\Http\Controllers\Front\AccountController::class, 'logout']);

    Route::get('/register', [App\Http\Controllers\Front\AccountController::class, 'register']);
    Route::post('/register', [App\Http\Controllers\Front\AccountController::class, 'postRegister']);

    Route::prefix('my-order')->middleware('CheckMemberLogin')->group(function () {
        Route::get('/', [App\Http\Controllers\Front\AccountController::class, 'myOrderIndex']);
        Route::get('{id}', [App\Http\Controllers\Front\AccountController::class, 'myOrderShow']);
    });
    
});


Route::prefix('checkout')->group(function(){
    Route::get('/', [App\Http\Controllers\Front\CheckOutController::class, 'index']);
    Route::post('/', [App\Http\Controllers\Front\CheckOutController::class, 'addOder']);
    Route::get('/result', [App\Http\Controllers\Front\CheckOutController::class, 'result']);
    

    
});



