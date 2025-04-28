<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'name',
        'alamat',
        'telp',
        'brand',
        'amount',
        'user_id',
        'car_id',
        'car_name',
        'status'
    ];
}
