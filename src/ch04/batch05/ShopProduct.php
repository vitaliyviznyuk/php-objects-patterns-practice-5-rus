<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch05;

/* Листинг 04.09 */

class ShopProduct implements Chargeable
{
    // ...
    protected $price;

    // ...

    public function getPrice(): float
    {
        return $this->price;
    }
    // ...
}
