<?php

namespace KatalinKS\PriceList\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use KatalinKS\PriceList\Interfaces\Objects\PriceListObj;

class PriceList extends Model implements PriceListObj
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'type',
        'currency',

    ];

    public function getId(): int
    {
        return  $this->getAttribute('id');
    }

    public function getOrdersEmails(): Collection
    {
        // TODO: Implement getOrdersEmails() method.
    }

    public function prices()
    {
        return $this->hasMany(Prices::class);
    }
}
