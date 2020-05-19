<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch03\batch04;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        /* Листинг 03.13 */

        $product1 = new ShopProduct('Собачье сердце', 'Булгаков', 'Михаил', 5.99);
        print "Автор: {$product1->getProducer()}\n";

        /* /Листинг 03.13 */
    }
}
