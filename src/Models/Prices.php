<?php

namespace KatalinKS\PriceList\Models;

use Illuminate\Database\Eloquent\Model;

class Prices extends Model
{
    protected $fillable = [
        'product_id',
        'price',
    ];
}
