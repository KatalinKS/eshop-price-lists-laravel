<?php

namespace KatalinKS\PriceList\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use KatalinKS\PriceList\Interfaces\Objects\PriceListObj;

class PriceList extends Model implements PriceListObj
{
    use HasFactory;
    protected $fillable = [
        'id'
    ];

    public function getId(): int
    {
        return  $this->getAttribute('id');
    }
}
