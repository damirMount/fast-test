<?php

namespace App\Services;

// Объявляем абстрактный класс для геометрических фигур
abstract class Shape2 {
    // Абстрактный метод для расчета площади фигуры
    abstract public function calculateArea();
}


// Класс круга, который наследует абстрактный класс Shape
class Circle extends Shape2 {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

// Класс квадрата, который наследует абстрактный класс Shape
class Square  {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }


    public function calculateArea() {
        return pow($this->side, 2);
    }
}

// Класс треугольника, который наследует абстрактный класс Shape
class Triangle extends Shape2 {
    private $base;
    private $height;

    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    public function calculateArea() {
        return 0.5 * $this->base * $this->height;
    }
}

// Класс-клиент для расчета площади фигур
class Client {
    // Метод для вывода площади фигур в консоль
    public function printAreas($shapes) {
        foreach ($shapes as $shape) {
            echo "Area: " . $shape->calculateArea() . "\n";
        }
    }
}

// Создаем объекты фигур и передаем их в метод printAreas класса-клиента
$shapes = array(
    new Circle(5),
    new Square(4),
    new Triangle(3, 6)
);

$client = new Client();
$client->printAreas($shapes);

