<?php
use Magento\Framework\Component\ComponentRegistrar;
ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Zwernemann_AddCurrency',
    __DIR__
);
require_once(__DIR__ . '/Override/CurrencyBundle.php');
