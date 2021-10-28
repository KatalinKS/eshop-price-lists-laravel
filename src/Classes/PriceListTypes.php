<?php

namespace KatalinKS\PriceList\Classes;

use Illuminate\Support\Collection;

class PriceListTypes
{
    private static string $retail = 'retail';
    private static string $wholesale = 'wholesale';

    /**
     * Возвращает имя типа розничного прайс листа
     * @return string
     */
    public static function getRetail(): string
    {
        return self::$retail;
    }

    /**
     * Возвращает имя типа оптового прайс листа
     * @return string
     */
    public static function getWholesale(): string
    {
        return self::$wholesale;
    }

    /**
     * Возвращает коллекцию всех типов
     * @return Collection
     */
    public function all(): Collection
    {
        return collect([self::getRetail(), self::getWholesale()]);
    }

    public static function check(string $type): bool
    {
        $types = self::all();

        return $types->contains($type);
    }
}
