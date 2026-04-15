<?php
namespace Magento\Framework\Locale\Bundle;

class CurrencyBundle extends DataBundle
{
    protected $path = 'ICUDATA-curr';

    public function toArray($bundle)
    {
        $aux = [];
        foreach ($bundle as $k => $v) {
            $aux[$k] = is_object($v) ? $this->toArray($v) : $v;
        }
        return $aux;
    }

    public function get($locale)
    {
        $bundle = parent::get($locale);
        $bundleAsArray = $this->toArray($bundle);
        $bundleAsArray['Currencies']['SLE'] = ['Le', 'Sierra Leonean Leone'];
        $bundleAsArray['CurrencyPlurals']['SLE'] = [
            'one'   => 'Sierra Leonean Leone',
            'other' => 'Sierra Leonean Leones',
        ];
        return $bundleAsArray;
    }
}
