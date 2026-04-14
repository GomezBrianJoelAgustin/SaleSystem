<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $fillable = ['name', 'price', 'category_id'];

    public function branches(){
        return $this->belongsToMany(Branch::class, 'branches_product'); //belongsToMany porque un producto puede estar en muchas sucursales y una sucursal puede tener muchos productos
    }

    public function providers(){
        return $this->belongsToMany(Provider::class, 'provider_product'); //belongsToMany porque un producto puede tener muchos proveedores y un proveedor puede tener muchos productos 
    }

    public function category(){
        return $this->belongsTo(Category::class); //belongsTo porque un producto pertenece a una categoría y una categoría puede tener muchos productos
    }

    public function saleDetail(){
        return $this->hasMany(SaleDetail::class); //hasMany porque un producto puede tener muchos detalles de venta
    }

    public function branchProduct(){
        return $this->hasMany(BranchProduct::class); //hasMany porque un producto puede estar en muchas sucursales y una sucursal puede tener muchos productos
    }

    public function orderDetails(){
        return $this->hasMany(OrderDetail::class); //hasMany porque un producto puede tener muchos detalles de venta
    }

    public function providerProduct(){
        return $this->hasMany(ProviderProduct::class); //hasMany porque un producto puede tener muchos detalles de venta
    }
}
