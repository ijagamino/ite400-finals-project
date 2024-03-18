<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Flavor extends Model
{
    use HasFactory;

    public function getNameAttribute($name)
    {
        return ucwords(strtolower($name));
    }

    public function cartItems(): BelongsToMany
    {
        return $this->belongsToMany(CartItem::class, 'cart_item');
    }

    public function orderDetail(): BelongsToMany
    {
        return $this->belongsToMany(OrderDetail::class, 'cart_item');
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'cart_item');
    }
}
