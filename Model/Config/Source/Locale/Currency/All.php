<?php
declare(strict_types=1);

namespace Zwernemann\AddCurrency\Model\Config\Source\Locale\Currency;

class All extends \Magento\Config\Model\Config\Source\Locale\Currency\All
{
    private const CURRENCY_CODE = 'SLE';
    private const CURRENCY_LABEL = 'Sierra Leonean Leone (SLE)';

    public function toOptionArray($isMultiselect = false)
    {
        $result = parent::toOptionArray($isMultiselect);

        foreach ($result as $option) {
            if (($option['value'] ?? null) === self::CURRENCY_CODE) {
                return $result;
            }
        }

        $result[] = [
            'value' => self::CURRENCY_CODE,
            'label' => self::CURRENCY_LABEL,
        ];

        usort($result, static function (array $a, array $b) {
            return strcmp((string)$a['label'], (string)$b['label']);
        });

        return $result;
    }
}
