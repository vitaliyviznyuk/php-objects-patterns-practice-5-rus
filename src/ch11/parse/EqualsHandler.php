<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch11\parse;

class EqualsHandler implements Handler
{
    public function handleMatch(Parser $parser, Scanner $scanner)
    {
        $comp1 = $scanner->popResult();
        $comp2 = $scanner->popResult();
        $scanner->pushResult(new EqualsExpression($comp1, $comp2));
    }
}
