<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch06_5;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        /* Листинг 04.32 */
        $u = new UtilityService();
        print $u->calculateTax(100) . "\n";
        print $u->basicTax(100) . "\n";
        /* /Листинг 04.32 */
    }
}
