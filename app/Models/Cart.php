<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id',
        'service_category',
        'options',
        'quantity',
        'total_price',
    ];

    protected $casts = [
        'options' => 'array',
    ];
}
