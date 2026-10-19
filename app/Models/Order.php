<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    protected $fillable = [
        'order_number', 'user_id', 'email', 'phone', 'first_name', 
        'last_name', 'country', 'street_address', 'apartment', 
        'city', 'state', 'zip_code', 'shipping_method', 
        'subtotal', 'shipping_cost', 'estimated_tax', 'discount_amount', 
        'total', 'currency', 'payment_status', 'payment_method', 
        'paypal_order_id', 'tracking_number'
    ];

    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
}