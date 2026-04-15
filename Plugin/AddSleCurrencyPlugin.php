<?php
declare(strict_types=1);

namespace Zwernemann\AddCurrency\Plugin;

use Magento\Config\Model\Config\Source\Locale\Currency\All;

class AddSleCurrencyPlugin
{
    private const CURRENCY_CODE = 'SLE';
    private const CURRENCY_LABEL = 'Sierra Leonean Leone (SLE)';

    /**
     * Add SLE (Sierra Leonean Leone) to the list of available currencies.
     *
     * SLE was introduced in 2022 as a redenomination of SLL and may not be
     * present in older ICU/CLDR datasets that Magento relies on.
     */
    public function afterToOptionArray(All $subject, array $result): array
    {
        foreach ($result as $option) {
            if (($option['value'] ?? null) === self::CURRENCY_CODE) {
                return $result;
            }
        }

        $result[] = [
            'value' => self::CURRENCY_CODE,
            'label' => self::CURRENCY_LABEL,
        ];

        usort($result, static fn(array $a, array $b) => strcmp((string)$a['label'], (string)$b['label']));

        return $result;
    }
}
