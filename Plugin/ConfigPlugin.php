<?php
declare(strict_types=1);

namespace Zwernemann\AddCurrency\Plugin;

use Magento\Framework\App\Config\ScopeConfigInterface;

class ConfigPlugin
{
    public function afterGetValue(
        ScopeConfigInterface $subject,
        $result,
        $path = null,
        $scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT,
        $scopeCode = null
    ) {
        if ($path === 'system/currency/installed') {
            return $result . ',SLE';
        }
        return $result;
    }
}
