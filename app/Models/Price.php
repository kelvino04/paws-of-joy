<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'second_dog_price',
        'unit',
        'active',
        'sort_order',
    ];
}
