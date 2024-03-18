<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\Pivot;

class OrderDetail extends Pivot
{
    protected $fillable = [
        'order_id',
        'product_id',
        'flavor_id',
        'layer',
        'quantity',
    ];

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function flavors(): HasMany
    {
        return $this->hasMany(Flavor::class);
    }
}
