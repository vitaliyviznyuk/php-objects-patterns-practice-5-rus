<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch06_2;

/* Листинг 04.17 */

trait IdentityTrait
{
    public function generateId(): string
    {
        return uniqid();
    }
}
