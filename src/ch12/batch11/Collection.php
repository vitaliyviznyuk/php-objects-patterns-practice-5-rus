<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch12\batch11;

class Collection
{
    private $vals = [];

    public function add(Space $space)
    {
        $this->vals[] = $space;
    }

    // dummy implementation
    public static function getCollection($type)
    {
        return new SpaceCollection();
    }
}
