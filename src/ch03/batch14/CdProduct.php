<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch03\batch14;

use popp\ch03\batch14\ShopProduct;

class CdProduct extends ShopProduct
{
    public $playLength;

    public function __construct(
        string $title,
        string $firstName,
        string $mainName,
        float $price,
        int $playLength
    )
    {
        parent::__construct(
            $title,
            $firstName,
            $mainName,
            $price
        );
        $this->playLength = $playLength;
    }

    public function getPlayLength()
    {
        return $this->playLength;
    }

    public function getSummaryLine()
    {
        $base = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        $base .= ": Время звучания - {$this->playLength}";
        return $base;
    }
}
