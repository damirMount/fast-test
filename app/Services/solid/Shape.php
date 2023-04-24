<?php

namespace App\Services\solid;

interface Shape {
    public function area();
}

class Rectangle implements Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area() {
        return $this->width * $this->height;
    }
}

class Square implements Shape {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function area() {
        return pow($this->side, 2);
    }
}

class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * pow($this->radius, 2);
    }
}

function printArea(Shape $shape) {
    echo "Area of " . get_class($shape) . " is " . $shape->area() . "\n";
}

$rectangle = new Rectangle(5, 10);
$square = new Square(5);
$circle = new Circle(5);

printArea($rectangle);
printArea($square);
printArea($circle);

