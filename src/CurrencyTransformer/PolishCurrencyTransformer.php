<?php

namespace NumberToWords\CurrencyTransformer;

use NumberToWords\Legacy\Numbers\Words;

class PolishCurrencyTransformer implements CurrencyTransformer
{
    /**
     * @param int    $amount
     * @param string $currency
     *
     * @return string
     */
    public function toWords($amount, $currency)
    {
        $converter = new Words();

        return $converter->transformToCurrency($amount, 'pl', $currency);
    }
}
