<?php

namespace App\Services\solid;
class Rectangle {
    protected $width;
    protected $height;

    public function setWidth($width) {
        $this->width = $width;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function getWidth() {
        return $this->width;
    }

    public function getHeight() {
        return $this->height;
    }

    public function area() {
        return $this->width * $this->height;
    }
}

class Square extends Rectangle {
    public function setWidth($width) {
        $this->width = $width;
        $this->height = $width;
    }

    public function setHeight($height) {
        $this->width = $height;
        $this->height = $height;
    }
}

function printArea(Rectangle $rectangle) {
    $rectangle->setWidth(5);
    $rectangle->setHeight(4);
    echo "Expected area: " . (5 * 4) . "\n";
    echo "Actual area: " . $rectangle->area() . "\n";
}

$rectangle = new Rectangle();
printArea($rectangle);

$square = new Square();
printArea($square);

