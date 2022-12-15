<?php

namespace App\Http\Controllers\Admin;
use App\Services\Product\ProductServiceInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductComment;
class ProductCommentController extends Controller
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
        $product_comments = $product->product_comment;
        return view('admin.product.comment.index', compact('product','product_comments'));
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
    public function store(Request $request)
    {
        //
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
    public function destroy($product_id, $product_comment_id)
    {
        //
        ProductComment::find($product_comment_id)->delete();
        return redirect('admin/product/'.$product_id.'/comment');
    }
}
