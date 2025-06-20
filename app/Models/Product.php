<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function casts(): array
    {
        return [
            'available' => 'boolean'
        ];
    }
}