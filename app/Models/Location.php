<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function product(){
        return $this->hasMany(Product::class);
    }
    public function order(){
        return $this->hasMany(Order::class);
    }
}
