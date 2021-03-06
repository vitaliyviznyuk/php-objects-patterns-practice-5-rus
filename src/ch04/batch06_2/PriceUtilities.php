<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch06_2;

trait PriceUtilities
{
    private $taxrate = 17;

    public function calculateTax($price)
    {
        return (($this->taxrate / 100) * $price);
    }

    // other utilities
}
