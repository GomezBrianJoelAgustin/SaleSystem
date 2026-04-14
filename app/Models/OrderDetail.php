<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderDetail extends Model
{
    protected $fillable = ['order_id', 'product_id', 'quantity'];

    public function products(){
        return $this->belongsTo(Product::class); //belongsTo porque un detalle de venta pertenece a un producto y un producto puede tener muchos detalles de venta  
    }

    public function orders(){
        return $this->belongsTo(Order::class); //belongsTo porque un detalle de venta pertenece a una venta y una venta puede tener muchos detalles de venta
    }
}
