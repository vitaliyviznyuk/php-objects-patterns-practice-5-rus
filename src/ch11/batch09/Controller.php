<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch11\batch09;

use popp\ch11\batch09\CommandContext;

/* Листинг 11.50 */

class Controller
{
    private $context;

    public function __construct()
    {
        $this->context = new CommandContext();
    }

    public function getContext(): CommandContext
    {
        return $this->context;
    }

    public function process()
    {
        $action = $this->context->get('action');
        $action = (is_null($action)) ? "default" : $action;
        $cmd = CommandFactory::getCommand($action);

        if (!$cmd->execute($this->context)) {
            // handle failure
        } else {
            // success
            // dispatch view
        }
    }
}
