<?php
class Character {

}

class Battle {

}

// Create characters
$character1 = new Character("Character 1", 100, 20);
$character2 = new Character("Character 2", 100, 25);

// Start battle
$battle = new Battle($character1, $character2);
$battle->start();
