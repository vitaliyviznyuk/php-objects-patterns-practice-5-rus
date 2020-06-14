<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch11\batch04;

class Logger
{
    public static function logIP(string $user, string $ip, array $status)
    {
        print "Loggger: $user, ip: $ip status:";
        print implode("/", $status);
        print "\n";
    }
}
