<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch24\batch01\marklogic;

use popp\ch24\batch01\parse\Handler;
use popp\ch24\batch01\parse\Parser;
use popp\ch24\batch01\parse\Scanner;

use popp\ch24\batch01\interpreter\LiteralExpression;

/* Листинг 24.18 */

class StringLiteralHandler implements Handler
{
    public function handleMatch(Parser $parser, Scanner $scanner)
    {
        $value = $scanner->getContext()->popResult();
        $scanner->getContext()->pushResult(new LiteralExpression($value));
    }
}
