<?php

namespace App\Services;

class Transformer
{
    public $name;
    public $color;
    public $age;
    public $machine;


    public function __construct(string $name, string $color, string $age, string $machine)
    {
        $this->name = $name;
        $this->color = $color;
        $this->age = $age;
        $this->machine = $machine;
    }

    public function attack($name, $name2)
    {
        echo $name . " attacked " . $name2;
    }

    public function transform()
    {
        echo "$this->name transformed to $this->machine";
    }

    public function fly()
    {
        echo "$this->name flew";
    }
}

$transformer = new Transformer('Optimus', 'RedBlue', '150', 'Truck');
$transformer2 = new Transformer('Decepticon', 'Black', '100', 'Airplane');

$transformer->attack($transformer->name, $transformer2->name);
