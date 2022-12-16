<?php

use Rodrigue\MoneyFormat\MoneyFormat;

require_once './vendor/autoload.php';

$moneyFormat = new MoneyFormat(10000);

$formatted = $moneyFormat->format("MGA");
var_dump($formatted);