<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch11\batch09;

/* Листинг 11.49 */

class CommandFactory
{
    private static $dir = 'commands';

    public static function getCommand(string $action = 'Default'): Command
    {
        if (preg_match('/\W/', $action)) {
            throw new Exception("illegal characters in action");
        }

        $class = __NAMESPACE__ . "\\commands\\" . UCFirst(strtolower($action)) . "Command";

        if (!class_exists($class)) {
            throw new CommandNotFoundException("no '$class' class located");
        }

        $cmd = new $class();

        return $cmd;
    }
}
