<?php

namespace vitaliyviznyuk\popp5rus\ch18\batch04\woo\controller;

use popp\ch18\batch04\woo\base\ApplicationRegistry;

class Controller
{
    private $applicationHelper;

    private function __construct()
    {
    }

    /**
     * @return void
     */
    public static function run(): void
    {
        $instance = new Controller();
        $instance->init();
        $instance->handleRequest();
    }

    public function init()
    {
        $applicationHelper
            = ApplicationHelper::instance();
        $applicationHelper->init();
    }

    /* Листинг 18.15 */

// Controller

    public function handleRequest()
    {
        $request = ApplicationRegistry::getRequest();
        $app_c = ApplicationRegistry::appController();

        while ($cmd = $app_c->getCommand($request)) {
            $cmd->execute($request);
        }

        $this->invokeView($app_c->getView($request));
    }

    /* /Листинг 18.15 */

    public function invokeView($target)
    {
        include("src/ch18/batch04/woo/view/$target.php");
    }
}
