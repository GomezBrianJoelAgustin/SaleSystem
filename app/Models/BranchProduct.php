<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchProduct extends Model
{
    protected $fillable = ['branch_id', 'product_id', 'stock', 'min_stock', 'max_stock'];

    public function branch(){
        return $this->belongsTo(Branch::class); //belongsTo porque una sucursal puede tener muchos productos y un producto puede estar en muchas sucursales
    }

    public function products(){
        return $this->belongsTo(Product::class); //belongsTo porque una sucursal puede tener muchos productos y un producto puede estar en muchas sucursales
    }
}
