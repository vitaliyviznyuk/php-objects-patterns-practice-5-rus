<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch06_3;

/* Листинг 04.21 */

trait IdentityTrait
{
    public function generateId(): string
    {
        return uniqid();
    }
}
