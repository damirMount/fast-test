<?php

namespace App\solid\Services;

abstract class Animal {
    protected $name;
    protected $type;

    public function __construct($name, $type) {
        $this->name = $name;
        $this->type = $type;
    }

    public function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Type: " . $this->type . "<br>";
    }
}

class Cat extends Animal {
    protected $color;

    public function __construct($name, $color) {
        parent::__construct($name, "Cat");
        $this->color = $color;
    }

    public function displayInfo() {
        parent::displayInfo();
        echo "Color: " . $this->color . "<br>";
    }
}

class Dog extends Animal {
    protected $breed;

    public function __construct($name, $breed) {
        parent::__construct($name, "Dog");
        $this->breed = $breed;
    }

    public function displayInfo() {
        parent::displayInfo();
        echo "Breed: " . $this->breed . "<br>";
    }
}

