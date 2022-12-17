<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    
    use HasFactory;
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $fillable = ['country','user_id', 'name', 'company_name', 'street_address', 'town_city', 'postcode_zip', 'email', 'phone','status'];

    public function order_detail(){
        return $this->hasMany(OrderDetail::class, 'order_id', 'id');

    }
}
