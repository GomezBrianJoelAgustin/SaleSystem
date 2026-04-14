<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    /** @use HasFactory<\Database\Factories\ProviderFactory> */
    use HasFactory;

    protected $fillable = ['name', 'phone'];

    public function products(){
        return $this->belongsToMany(Product::class, 'provider_product'); //belongsToMany porque un proveedor puede tener muchos productos y un producto puede tener muchos proveedores
    }

    public function orders(){
        return $this->hasMany(Order::class); //hasMany porque un proveedor puede tener muchas órdenes y una orden pertenece a un proveedor
    }

    public function providerProduct(){
        return $this->hasMany(ProviderProduct::class); //hasMany porque un proveedor puede tener muchos productos
    }
}
