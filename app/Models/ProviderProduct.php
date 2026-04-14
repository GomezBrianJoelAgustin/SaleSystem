<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProviderProduct extends Model
{
    protected $fillable = ['provider_id', 'product_id', 'price'];

    public function provider(){
        return $this->belongsTo(Provider::class); //belongsTo porque un proveedor puede tener muchos productos y un producto puede tener muchos proveedores
    }

    public function product(){
        return $this->belongsTo(Product::class); //belongsTo porque un proveedor puede tener muchos productos y un producto puede tener muchos proveedores
    }
}
