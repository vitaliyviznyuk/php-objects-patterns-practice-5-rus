<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch12\batch11;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        // runner code here
        $venue = new Venue(-1, "bob's house");
        $venue->addSpace(new Space(-1, "the big stage"));
        $spaces = $venue->getSpaces();
        $venue->setSpaces($spaces);
    }
}
