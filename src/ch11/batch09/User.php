<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch11\batch09;

class User
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
