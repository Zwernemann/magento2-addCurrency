# Zwernemann_AddCurrency

Magento 2 module that adds the **Sierra Leonean Leone (SLE)** to the list of available currencies.

## Background

SLE was introduced in 2022 as a redenomination of the Sierra Leonean Leone (SLL) at a ratio of 1000:1. Because it is a relatively new currency, it may be absent from the ICU/CLDR dataset that older Magento 2 installations rely on. This module ensures SLE appears in the currency dropdown regardless of the underlying locale data.

## What the module does

- Overrides `Magento\Framework\Locale\Bundle\CurrencyBundle` to inject SLE (symbol `Le`, name *Sierra Leonean Leone*) into the ICU currency data at bootstrap time.
- If a future ICU/CLDR data update already includes SLE, the module detects this and skips the injection — the ICU data takes precedence.
- Adds SLE to Magento's list of locale-allowed and installed currencies via two plugins.
- SLE then appears in **Stores > Configuration > General > Currency Setup** under *Base Currency* and *Allowed Currencies*.

## Installation

### Via Composer

```bash
composer require zwernemann/magento2-addcurrency
bin/magento module:enable Zwernemann_AddCurrency
bin/magento setup:upgrade
bin/magento cache:flush
```

### Manual

1. Copy the module folder to `app/code/Zwernemann/AddCurrency/`.
2. Run the following commands from the Magento root:

```bash
bin/magento module:enable Zwernemann_AddCurrency
bin/magento setup:upgrade
bin/magento cache:flush
```

## Requirements

- Magento 2.3 or newer
- PHP 7.4 or newer

## License

MIT
