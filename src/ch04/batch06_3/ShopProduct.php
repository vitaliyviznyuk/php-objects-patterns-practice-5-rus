<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch06_3;

class ShopProduct implements IdentityObject
{
    use PriceUtilities, IdentityTrait;
}
