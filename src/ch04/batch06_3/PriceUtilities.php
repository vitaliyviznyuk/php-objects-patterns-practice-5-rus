<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch06_3;

/* Листинг 04.26 */

trait PriceUtilities
{
    private $taxrate = 17;

    public function calculateTax(float $price): float
    {
        return (($this->taxrate / 100) * $price);
    }

    // other utilities
}
