<?php

namespace KatalinKS\PriceList\Commands;

use Illuminate\Console\Command;

class PriceListCommand extends Command
{
    public $signature = 'eshop-price-lists-laravel';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
