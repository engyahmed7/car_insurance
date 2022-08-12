<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackList extends Model
{
    use HasFactory;
    protected $fillable=[
        'pack_id',
        'name'
    ];
}
