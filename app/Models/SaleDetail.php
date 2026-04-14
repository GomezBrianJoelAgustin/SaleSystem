<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleDetail extends Model
{
    /** @use HasFactory<\Database\Factories\SaleDetailFactory> */
    use HasFactory;

    protected $fillable = ['sale_id', 'product_id', 'quantity', 'price', 'subtotal'];

    public function sales(){
        return $this->belongsTo(Sale::class); //belongsTo porque un detalle de venta pertenece a una venta
    }

    public function product(){
        return $this->belongsTo(Product::class); //belongsTo porque un detalle de venta pertenece a un producto
    }
}
