<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch11\parse;

class Context
{
    private $expressionstore = array();

    public function replace(Expression $exp, $value)
    {
        $this->expressionstore[$exp->getKey()] = $value;
    }

    public function lookup(Expression $exp)
    {
        return $this->expressionstore[$exp->getKey()];
    }
}
