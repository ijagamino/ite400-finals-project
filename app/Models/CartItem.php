<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CartItem extends Pivot
{
    protected $fillable = [
        'user_id',
        'product_id',
        'flavor_id',
        'quantity',
        'layer',
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
