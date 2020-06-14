<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch24\batch01\marklogic;

use popp\ch24\batch01\parse\Handler;
use popp\ch24\batch01\parse\Parser;
use popp\ch24\batch01\parse\Scanner;

use popp\ch24\batch01\interpreter\VariableExpression;

/* Листинг 24.17 */

class VariableHandler implements Handler
{
    public function handleMatch(Parser $parser, Scanner $scanner)
    {
        $varname = $scanner->getContext()->popResult();
        $scanner->getContext()->pushResult(new VariableExpression($varname));
    }
}
