<?php

namespace App\Services;

class Character
{
    private $name;
    private $health;
    private $attackPower;

    public function __construct($name, $health, $attackPower) {
        $this->name = $name;
        $this->health = $health;
        $this->attackPower = $attackPower;
    }

    public function getName() {
        return $this->name;
    }

    public function getHealth() {
        return $this->health;
    }

    public function getAttackPower() {
        return $this->attackPower;
    }

    public function takeDamage($damage) {
        $this->health -= $damage;
        if ($this->health < 0) {
            $this->health = 0;
        }
    }

    public function attack(Character $target) {
        $damage = $this->attackPower;
        $target->takeDamage($damage);

        return $this->name . " attacks " . $target->getName() . " for " . $damage . " damage.<br>";
    }
}
