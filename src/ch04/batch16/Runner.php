<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch16;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        /*
        $address = new Address("441b Bakers Street");
        print_r($address);
        print "street address: {$address->streetaddress}\n";
        $address = new Address("15", "Albert Mews");
        print "street address: {$address->streetaddress}\n";
        $address->streetaddress = "34, West 24th Avenue";
        //print "street address: {$address->streetaddress}\n";
        //$address->streetaddress = "failme";
        */
        /* Листинг 04.78 */
        $address = new Address("441b Bakers Street");
        print "street address: {$address->streetaddress}\n";
        $address = new Address("15", "Albert Mews");
        print "street address: {$address->streetaddress}\n";
        $address->streetaddress = "34, West 24th Avenue";
        print "street address: {$address->streetaddress}\n";
        /* /Листинг 04.78 */
    }
}
