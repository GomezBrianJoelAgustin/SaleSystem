<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /** @use HasFactory<\Database\Factories\OrderFactory> */
    use HasFactory;

    protected $fillable = ['provider_id', 'branch_id', 'status'];

    public function orderDetails(){
        return $this->hasMany(OrderDetail::class); //hasMany porque una orden puede tener muchos detalles de orden
    }

    public function provider(){
        return $this->belongsTo(Provider::class); //belongsTo porque una orden pertenece a un proveedor y un proveedor puede tener muchas órdenes   
    }

    public function branches(){
        return $this->belongsTo(Branch::class); //belongsTo porque una orden pertenece a una sucursal y una sucursal puede tener muchas órdenes
    }
}
