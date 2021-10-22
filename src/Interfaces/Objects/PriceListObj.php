<?php

namespace KatalinKS\PriceList\Interfaces\Objects;

use Illuminate\Support\Collection;

interface  PriceListObj
{
    public function getId(): int;

    /**
     * Возвращает коллекцию емейлов для оформленных заказов
     * @return Collection
     */
    public function getOrdersEmails(): Collection;
}
