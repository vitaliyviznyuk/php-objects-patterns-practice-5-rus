<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch11\batch12;

class TileForces
{
    public function __construct(int $x, int $y, UnitAcquisition $acq)
    {
        $this->x = $x;
        $this->y = $x;
        $this->units = $acq->getUnits($this->x, $this->y);
    }

    /* Листинг 11.60 */

    // TileForces

    public function firepower(): int
    {
        $power = 0;

        foreach ($this->units as $unit) {
            $power += $unit->bombardStrength();
        }

        return $power;
    }

    /* /Листинг 11.60 */

    public function health(): int
    {
        $health = 0;

        foreach ($this->units as $unit) {
            $health += $unit->getHealth();
        }

        return $health;
    }
}
