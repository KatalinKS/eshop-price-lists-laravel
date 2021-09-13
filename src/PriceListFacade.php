<?php

namespace KatalinKS\PriceList;

use Illuminate\Support\Facades\Facade;

/**
 * @see \KatalinKS\PriceList\PriceList
 */
class PriceListFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'eshop-price-lists-laravel';
    }
}
