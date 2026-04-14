<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    /** @use HasFactory<\Database\Factories\BranchFactory> */
    use HasFactory;
    protected $fillable = ['name', 'location', 'telephone'];

    public function products(){
        return $this->belongsToMany(Product::class, 'branches_product'); //belongsToMany porque una sucursal puede tener muchos productos y un producto puede estar en muchas sucursales
    }

    public function users(){
        return $this->hasMany(User::class); //hasMany porque una sucursal puede tener muchos usuarios
    }

    public function order(){
        return $this->hasMany(Order::class); //hasMany porque una sucursal puede tener muchas órdenes
    }
}
