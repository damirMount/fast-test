<?php

namespace App\Services;

class Shape {
    public $width;

    public function area() {
        return $this->width * 2;
    }
}

interface Figure {
    public function perimeter();

}

class Rectangle implements Figure {
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area() {
        return $this->width * $this->height;
    }

    public function perimeter() {
        return 2 * ($this->width + $this->height);
    }
}

class Circle implements Figure {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * pow($this->radius, 2);
    }

    public function perimeter() {
        return 2 * pi() * $this->radius;
    }


}

$shapes = array(new Rectangle(10, 5), new Circle(5));

foreach ($shapes as $shape) {
    echo "Area: " . $shape->area() . "\n";
}




'


class Shape - методы расчтета периметра
треугольник и прямугольник
client = вывести результат


создайте массив объектов и выведите результат'




