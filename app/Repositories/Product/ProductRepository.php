<?php


namespace App\Repositories\Product;
use App\Models\ProductCategory;
use App\Models\Product;
use App\Repositories\BaseRepositories;
use Illuminate\Http\Request;

class ProductRepository extends BaseRepositories implements ProductRepositoryInterface {
    public function getModel()
    {
        return Product::class;
    }
    public function getRelatedProduct($product){
        return $this->model->where('product_category_id',$product->product_category_id)->get(); 
    }
    public function getProductOnIndex($request){
        $sortBy = $request->sort_by ?? 'name-ascending';
        $search = $request->search ?? '';
        $products = $this->model->where('name','like', '%'.$search.'%');
        $products = $this->filter($products, $request);
        $products = $this->sortAndPaginate($products,$request);

       
        return $products;
    }
    
    private function sortAndPaginate($products, Request $request){
        $sortBy = $request->sort_by ?? 'name-ascending';
        switch ($sortBy){
            case 'name-ascending':
                $products = $products ->orderBy('name');
                break;
            case 'name-descending':
                $products = $products ->orderByDesc('name');
                break;
            case 'price-ascending':
                $products = $products ->orderBy('price');
                break;
            case 'price-descending':
                $products = $products ->orderByDesc('price');
                break;  
            default:
                $products = $products ->orderBy('id');

        }
        $products = $products->paginate(6);
        $products->appends(['sort_by'=> $sortBy]);

       
        return $products;
        

    }
    private function filter($products,Request $request){
        $brands = $request->brand ?? [];
        $brand_ids = array_keys($brands);
        $products = $brand_ids != null ? $products->whereIn('brand_id', $brand_ids) : $products;


        //ProductCategory
        $categories = $request->category ?? [];
        $category_ids = array_keys($categories);
        $products = $category_ids != null ? $products->whereIn('product_category_id', $category_ids) : $products;
        return $products;
            
    }
}