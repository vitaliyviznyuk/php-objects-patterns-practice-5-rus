<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch19;

/* Листинг 04.79 */

class Person
{
    protected $name;
    private $age;
    private $id;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function __destruct()
    {
        if (!empty($this->id)) {
            // save Person data
            print "saving person\n";
        }
    }
}
