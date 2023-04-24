<?php

namespace App\Services\solid;

interface Player
{
    public function play();
    public function stop();
    public function pause();
}

interface Buttons {
    public function next();
    public function prev();
}

class Magnitaphone implements Player, Buttons {
    public function play(){}
    public function stop(){}
    public function pause(){}
    public function next(){}
    public function prev(){}
}

class Radio implements Player {
    public function play(){}
    public function stop(){}
    public function pause(){}
}
