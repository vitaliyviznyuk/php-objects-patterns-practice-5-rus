<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch11\batch02;

/* Листинг 11.19 */

class RegexpMarker extends Marker
{
    public function mark(string $response): bool
    {
        return (preg_match("$this->test", $response) === 1);
    }
}
