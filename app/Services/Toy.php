<?php

namespace App\Services;

class Toy
{
    public $name;
    protected $color;
    public $price;
    public $quantity;

    public function __construct($name, $color, $price, $quantity)
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->quantity = $quantity;
    }


    private function getDataSellForPeriod()
    {
        $total = $this->price * $this->quantity;
        $total->save();
    }

    public function getTotalPrice($name)
    {
        echo 'get total price from DB';
    }

    protected function getColor()
    {
        return $this->color;
    }

    public function run()
    {
        echo 'Toy can run';
    }

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
        echo 'This shi can shoot!';
    }

    public function getInfo()
    {
        echo "This ship's color is " . $this->getColor();
        echo "This ship's color is " . $this->color;
    }

}


$ship = new Ship('TT20', 'Red', '100$', 'asd');
$ship->getTotalPrice('tt20');

$toy = new Toy('asd','asd','asda', 'asdas');

$toy->getTotalPrice('tt20');

echo $ship->name . "\n";

//$ship->name = 'TT20';
//$ship->color = 'Red';  //error because is protected;
//$ship->price = '100$'; //error because is private;

//$ship->swim();
//$ship->shoot();


