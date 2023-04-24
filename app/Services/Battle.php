<?php

namespace App\Services;

class Battle
{
    private $character1;
    private $character2;

    public function __construct(Character $character1, Character $character2) {
        $this->character1 = $character1;
        $this->character2 = $character2;
    }

    public function start() {
        $object = new Result();

        $result = "<h2>Battle between " . $this->character1->getName() . " and " . $this->character2->getName() . ":</h2>";
        while ($this->character1->getHealth() > 0 && $this->character2->getHealth() > 0) {
            $result .= $this->character1->attack($this->character2);
            $result .= $this->character2->attack($this->character1);
            $result .= "<strong>" . $this->character1->getName() . " health:</strong> " . $this->character1->getHealth() . "<br>";
            $result.= "<strong>" . $this->character2->getName() . " health:</strong> " . $this->character2->getHealth() . "<br><br>";
        }
        if ($this->character1->getHealth() == 0 && $this->character2->getHealth() == 0) {
            $result .= "Both characters have knocked each other out, it's a draw!";
        } else if ($this->character1->getHealth() == 0) {
            $result .= $this->character2->getName() . " wins!";
            $object->setWinner($this->character2->getName());
            $object->setLooser($this->character1->getName());
        } else {
            $result .= $this->character1->getName() . " wins!";
            $object->setWinner($this->character1->getName());
            $object->setLooser($this->character2->getName());
        }

        $object->setResult($result);

        return $object;
    }
}
