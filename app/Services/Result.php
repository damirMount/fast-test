<?php

namespace App\Services;

class Result
{
    private $result;
    private $winner;
    private $looser;


    public function setResult($result)
    {
        $this->result = $result;
    }
    public function setWinner($winner)
    {
        $this->winner = $winner;
    }
    public function setLooser($looser)
    {
        $this->looser = $looser;
    }
    public function getResult()
    {
        return $this->result;
    }
    public function getWinner()
    {
        return $this->winner;
    }
    public function getLooser()
    {
        return $this->looser;
    }
}
