<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   protected $fillable = [
        'order_number','user_id','customer_name','phone','address',
        'total_amount','status','payment_mode','payment_status'
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function address() {
        return $this->belongsTo(CustomerAddress::class, 'address_id');
    }


}
