<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $fillable = [
        'user_id',
        'order_id',
        'delivery_type',
        'delivery_address',
        'delivery_date',
        'payment_method',
    ];

    public function completedOrders()
    {
        return $this->hasMany(CompletedOrder::class);
    }
}
