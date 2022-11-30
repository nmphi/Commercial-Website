<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable =[
        'brand_id',
        'product_category_id',
        'name',
        'description',
        'content',
        'price',
        'qty',
        'discount',
        'weight',
        'sku',
        'featured'
    ];

    public function product_comment(){
        return $this->hasMany(ProductComment::class, 'product_id', 'id');

    }

    public function product_image(){
        return $this->hasMany(ProductImage::class, 'product_id', 'id');

    }
    public function order_detail(){
        return $this->hasMany(OrderDetail::class, 'product_id', 'id');

    }

    public function brand(){
        return $this->belongsTo(Brand::class, 'brand_id', 'id');

    }

    public function product_category(){
        return $this->belongsTo(ProductCategory::class, 'product_category_id', 'id');

    }


}
