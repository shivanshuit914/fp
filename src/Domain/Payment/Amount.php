<?php

namespace Domain\Payment;

class Amount
{
    /**
     * @var string
     */
    private $amount;
    /**
     * @var string
     */
    private $currency;

    /**
     * Amount constructor.
     * @param string $amount
     * @param string $currency
     */
    private function __construct(string $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     * @param string $amount
     * @param string $currency
     * @return Amount
     */
    public static function withAmountAndCurrency(string $amount, string $currency) : Amount
    {
        return new static($amount, $currency);
    }

    /**
     * @return string
     */
    public function getAmount() : string
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getCurrency() : string
    {
        return $this->currency;
    }
}
