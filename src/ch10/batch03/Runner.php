<?php

namespace vitaliyviznyuk\popp5rus\ch10\batch03;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {

        $tank = new Tank();
        $tank2 = new Tank();
        $soldier = new Soldier();

        $army = new Army();
        $army->addUnit($soldier);
        $army->addUnit($tank);
        $army->addUnit($tank2);

        print_r($army);

        $army->removeUnit($tank2);

        print_r($army);
    }
}
