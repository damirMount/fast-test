<?php

namespace App\Services;

abstract class Vehicle {
    abstract public function startEngine();
    abstract public function stopEngine();
}


class Car extends Vehicle {
    public function startEngine() {
        echo "Starting car engine...";
    }

    public function stopEngine() {
        echo "Stopping car engine...";
    }
}

class Motorcycle extends Vehicle {
    public function startEngine() {
        echo "Starting motorcycle engine...";
    }

    public function stopEngine() {
        echo "Stopping motorcycle engine...";
    }
}


$car = new Car();
$car->startEngine(); // Starting car engine...
$car->stopEngine(); // Stopping car engine...

$motorcycle = new Motorcycle();
$motorcycle->startEngine(); // Starting motorcycle engine...
$motorcycle->stopEngine(); // Stopping motorcycle engine...
