<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch13\batch07;

use popp\ch13\batch04\DomainObject;

/* Листинг 13.42 */

class VenueUpdateFactory extends UpdateFactory
{
    public function newUpdate(DomainObject $obj): array
    {
        // note type checking removed
        $id = $obj->getId();
        $cond = null;
        $values['name'] = $obj->getName();

        if ($id > -1) {
            $cond['id'] = $id;
        }

        return $this->buildStatement("venue", $values, $cond);
    }
}
/* /Листинг 13.42 */
