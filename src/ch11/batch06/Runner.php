<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch11\batch06;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        $login = new Login();

        new SecurityMonitor($login);
        new GeneralLogger($login);

        $pt = new PartnershipTool($login);
        $login->detach($pt);

        for ($x = 0; $x < 10; $x++) {
            $login->handleLogin("bob", "mypass", '158.152.55.35');
            print "\n";
        }
    }
}
