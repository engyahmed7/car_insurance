<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable=[
        'car_brand',
        'car_number',
        'estimated_price',
        'specification',
        'city',
        'year',
        'pack_id'
    ];
}
