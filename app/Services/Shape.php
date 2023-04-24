<?php

namespace App\Services;

interface Shape
{
    public function perimeter();
}

class Triangle implements Shape
{
    public $side1;
    public $side2;
    public $side3;
   public function __construct( $side1, $side2, $side3)
   {
       $this->side1 = $side1;
       $this->side2 = $side2;
       $this->side3 = $side3;
   }

    public function perimeter()
    {
        $trPerimeter = $this->side1 + $this->side2 + $this->side3;

        return $trPerimeter;
    }
}

class Rectangle implements Shape
{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function perimeter()
    {
        $rtPerimeter = ($this->width + $this->height)*2;

        return $rtPerimeter;
    }
}

class Client
{
    public $array;

    foreach ($array as $element)
    {

    }
}
