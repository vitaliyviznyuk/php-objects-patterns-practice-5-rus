<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch07;

/* Листинг 04.54 */

class Document extends DomainObject
{
    public static function getGroup(): string
    {
        return "document";
    }
}
