<?php

namespace KatalinKS\PriceList\Traits;

use Illuminate\Database\Eloquent\Model;
use KatalinKS\PriceList\Classes\PriceListTypes;
use KatalinKS\PriceList\PriceList;

class HasPriceList extends Model
{
    public function priceList()
    {
        return $this->hasManyThrough(PriceList::class, 'price_list_to_model');
    }

    public function getRetailPriceList(): PriceList
    {
        return $this->priceList()->where('type', PriceListTypes::getRetail())->first();
    }

    public function getWholesalePriceList(): PriceList
    {
        return $this->priceList()->where('type', PriceListTypes::getWholesale())->first();
    }
}
