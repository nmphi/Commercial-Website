<?php

namespace App\Http\Controllers\Admin;
use App\Services\Product\ProductServiceInterface;
use App\Http\Controllers\Controller;
use App\Utilities\Common;
use Illuminate\Http\Request;
use App\Models\ProductImage;

class ProductImageController extends Controller
{
    private $productService;
    public function __construct(ProductServiceInterface $productService){
        $this->productService = $productService;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($product_id)
    {
        //
        $product = $this->productService->find($product_id);
        $product_images = $product->product_image;
        return view('admin.product.image.index', compact('product','product_images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $product_id)
    {
        //
        $data = $request->all();
        if ($request->hasFile('image')) {
          $data['path'] = Common::uploadFile($request->file('image'), 'front/images/product');  
          unset($data['image']);


          ProductImage::create($data);
        }
        return redirect('admin/product/'.$product_id.'/image');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product_id, $product_image_id)
    {
        //
        $file_name = ProductImage::find($product_image_id)->path;
        if ($file_name != ''){
            unlink('front/images/product/'.$file_name);
        }

        ProductImage::find($product_image_id)->delete();

        return redirect('admin/product/'.$product_id.'/image');

    }
}
