<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductComment extends Model
{
    use HasFactory;
    protected $table = 'product_comments';
    protected $primaryKey = 'id';
    protected $fillable = ['product_id', 'user_id', 'rating', 'messages', 'name', 'email'];


    public function product(){
        return $this->belongsTo(Product::class, 'product_id', 'id');

    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');

    }
}