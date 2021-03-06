<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch12\batch08;

class ListVenuesController extends PageController
{
    public function process()
    {
        $request = $this->getRequest();

        try {
            $this->render(__DIR__ . '/view/list_venues.php', $request);
            return;
        } catch (Exception $e) {
            $this->render(__DIR__ . '/view/error.php', $request);
        }
    }
}
