<?php

namespace App\Services;

class Toy
{
    public $name;
    public $color;
    public $price;

    public function fly()
    {
        echo 'Toy can fly';
    }

    public function swim()
    {
        echo 'Toy can swim';
    }

}

class Ship extends Toy
{
    public function shoot()
    {
        echo 'This ship can shoot!';
    }
}

$ship = new Ship();

$ship->color = 'Red';
$ship->name = 'T120';
$ship->price = '100$';

$ship->swim();
