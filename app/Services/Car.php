<?php

namespace App\Services;

class Car
{
    //Свойства класса Car
    public $brand;
    public $color;
    public $speed;

    public function __construct(string $brand, string $color, string $speed)
    {
        $this->brand = $brand;
        $this->color = $color;
        $this->speed = $speed;
    }

    public function startCar()
    {
        echo 'Машина завелась!' . "\n";
    }

    public function stopCar()
    {
        echo 'Машина остановилась!'  . "\n";
    }

    public function changeSpeed($newSpeed)
    {
        $this->speed = $newSpeed;
        echo 'Скорость ' . $this->brand . ' ускоярется до ' . $this->speed . ' км\ч'  . "\n";
    }
}

//------------------------------------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------------------------------------

$car = new Car('Mersed-Benz', 'Blue', '60 км\ч');

$car->startCar();


echo 'Скорость '. $car->brand . ' - ' . $car->speed  . "\n";

$car->changeSpeed('100 км\ч');

echo 'Скорость '. $car->brand . ' - ' . $car->speed  . "\n";

$car->stopCar();

echo '========---------============';
$car2 = new Car('BMW', 'Red', '80 км\ч');


$car2->startCar();
echo 'Скорость '. $car2->brand . ' - ' . $car2->speed  . "\n";
$car2->changeSpeed('120');
$car2->stopCar();




