<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch09\batch09;

abstract class ApptEncoder
{
    abstract public function encode(): string;
}
