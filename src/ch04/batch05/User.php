<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch05;

/* Листинг 04.46 */

class User extends DomainObject
{
    public static function create(): User
    {
        return new User();
    }
}
