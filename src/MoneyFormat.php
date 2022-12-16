<?php

namespace Rodrigue\MoneyFormat;

class MoneyFormat 
{
    private float $money;

    public function __construct(float $money)
    {
        $this->money = $money;
    }

    public function format(string $currency)
    {
        return number_format($this->money, 2, '.', ' ');
    }

}