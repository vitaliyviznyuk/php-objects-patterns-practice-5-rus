<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch11\parse;

abstract class CollectionParse extends Parser
{
    protected $parsers = array();

    public function add(Parser $p): Parser
    {
        if (is_null($p)) {
            throw new Exception("argument is null");
        }
        $this->parsers[] = $p;
        return $p;
    }

    public function term(): bool
    {
        return false;
    }
}
