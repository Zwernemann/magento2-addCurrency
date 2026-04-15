<?php
declare(strict_types=1);

namespace Zwernemann\AddCurrency\Plugin;

use Magento\Framework\Locale\Config;

class LocaleConfig
{
    public function afterGetAllowedCurrencies(Config $subject, array $currencies): array
    {
        return array_merge($currencies, ['SLE']);
    }
}
