<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    /** @use HasFactory<\Database\Factories\SaleFactory> */
    use HasFactory;

    protected $fillable = ['user_id', 'total'];

    public function users(){
        return $this->belongsTo(User::class); //belongsTo porque una venta pertenece a un usuario
    }

    public function saleDetails(){
        return $this->hasMany(SaleDetail::class); //hasMany porque una venta puede tener muchos detalles de venta
    }
}
