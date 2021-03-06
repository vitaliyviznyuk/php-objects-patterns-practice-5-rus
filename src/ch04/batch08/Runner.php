<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch08;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        $logger = create_function(
            '$product',
            'print "    logging ({$product->name})\n";'
        );

        $processor = new ProcessSale();
        $processor->registerCallback($logger);

        $processor->sale(new Product("shoes", 6));
        print "\n";
        $processor->sale(new Product("coffee", 6));
    }

    public static function run2()
    {
        $logger2 = function ($product) {
            print "    logging ({$product->name})\n";
        };

        $processor = new ProcessSale();
        $processor->registerCallback($logger2);

        $processor->sale(new Product("shoes", 6));
        print "\n";
        $processor->sale(new Product("coffee", 6));
    }

    public static function run3()
    {
        /* Листинг 04.93 */
        $processor = new ProcessSale();
        $processor->registerCallback([new Mailer(), "doMail"]);

        $processor->sale(new Product("shoes", 6));
        print "\n";
        $processor->sale(new Product("coffee", 6));
        /* /Листинг 04.93 */
    }

    public static function run4()
    {
        /* Листинг 04.95 */
        $processor = new ProcessSale();
        $processor->registerCallback(Totalizer::warnAmount());

        $processor->sale(new Product("shoes", 6));
        print "\n";
        $processor->sale(new Product("coffee", 6));
        /* /Листинг 04.95 */
    }

    public static function run5()
    {
        /* Листинг 04.97 */
        $processor = new ProcessSale();
        $processor->registerCallback(Totalizer2::warnAmount(8));

        $processor->sale(new Product("shoes", 6));
        print "\n";
        $processor->sale(new Product("coffee", 6));
        /* /Листинг 04.97 */
    }
}
// done
