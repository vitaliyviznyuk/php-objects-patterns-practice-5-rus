<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch23;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        /* Листинг 04.90 */
        $logger = create_function(
            '$product',
            'print "    logging ({$product->name})\n";'
        );

        $processor = new ProcessSale();
        $processor->registerCallback($logger);

        $processor->sale(new Product("shoes", 6));
        print "\n";
        $processor->sale(new Product("coffee", 6));
        /* /Листинг 04.90 */
    }

    public static function run2()
    {
        /* Листинг 04.91 */
        $logger2 = function ($product) {
            print "    logging ({$product->name})\n";
        };

        $processor = new ProcessSale();
        $processor->registerCallback($logger2);

        $processor->sale(new Product("shoes", 6));
        print "\n";
        $processor->sale(new Product("coffee", 6));
        /* /Листинг 04.91 */
    }
}
//done
