<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch12\batch03;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        // runner code here
        $reg = Registry::instance();
        $reg->set('request', new Request());

        $reg = Registry::instance();
        print_r($reg->get('request'));
    }
}
