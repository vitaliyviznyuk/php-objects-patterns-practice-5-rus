<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch10\batch05;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        $army1 = new Army();
        $army1->addUnit(new Archer());
        $army1->addUnit(new Archer());

        $army2 = new Army();
        $army2->addUnit(new Archer());
        $army2->addUnit(new Archer());
        $army2->addUnit(new LaserCannonUnit());

        $composite = UnitScript::joinExisting($army2, $army1);
        print_r($composite);
    }
}
