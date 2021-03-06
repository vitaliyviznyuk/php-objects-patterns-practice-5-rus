<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch24;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {

        /* Листинг 04.100 */
        $person = new Person();
        $person->output(
            new class implements PersonWriter {
                public function write(Person $person)
                {
                    print $person->getName() . " " . $person->getAge() . "\n";
                }
            }
        );
        /* /Листинг 04.100 */
    }

    public static function run2()
    {

        /* Листинг 04.101 */
        $person = new Person();
        $person->output(
            new class("/tmp/persondump") implements PersonWriter {
                private $path;

                public function __construct(string $path)
                {
                    $this->path = $path;
                }

                public function write(Person $person)
                {
                    file_put_contents($this->path, $person->getName() . " " . $person->getAge() . "\n");
                }
            }
        );
        /* /Листинг 04.101 */
    }
}
// done
