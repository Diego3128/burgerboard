<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'total',
        'state'
    ];

    public function casts(): array
    {
        return [
            'state' => 'boolean'
        ];
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'order_products', 'order_id', 'product_id')->withPivot('quantity')->withTimestamps();
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
