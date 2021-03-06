<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch11\batch08;

/* Листинг 11.40 */

abstract class CompositeUnit extends Unit
{
    // ...

    /* /Листинг 11.40 */
    private $units = [];

    public function getComposite(): Unit
    {
        return $this;
    }

    public function units(): array
    {
        return $this->units;
    }

    public function removeUnit(Unit $unit)
    {
        $units = [];

        foreach ($this->units as $thisunit) {
            if ($unit !== $thisunit) {
                $units[] = $thisunit;
            }
        }

        $this->units = $units;
    }

    public function getHealth(): int
    {
        $health = 0;

        foreach ($this->units() as $unit) {
            $health += $unit->getHealth();
        }

        return $health;
    }

    /* Листинг 11.40 */
    public function addUnit(Unit $unit)
    {
        foreach ($this->units as $thisunit) {
            if ($unit === $thisunit) {
                return;
            }
        }

        $unit->setDepth($this->depth + 1);
        $this->units[] = $unit;
    }

    public function accept(ArmyVisitor $visitor)
    {
        parent::accept($visitor);

        foreach ($this->units as $thisunit) {
            $thisunit->accept($visitor);
        }
    }
}
/* /Листинг 11.40 */
