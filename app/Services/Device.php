<?php

namespace App\Services;

class Device
{
    public $name;
    public $model;
    public $sn;

    public function __construct(string $name, string $model, string $sn)
    {
        $this->name = $name;
        $this->model = $model;
        $this->sn = $sn;
    }

    private function priceCalculation()
    {
        return "Here the price is calculating";
    }

    protected function depreciationCalculation()
    {
        return "Here the deprecaion is calculating";
    }

    public function setOwner()
    {
        return "This device is given to somebody";
    }

    private function doSomethingWithPrice()
    {
        return $this->priceCalculation();
    }

}

class Laptop extends Device
{
    public $processor;
    public $ram;
    public $hdd;

    public function __construct(string $processor, string $ram, string $hdd)
    {
        $this->processor = $processor;
        $this->ram = $ram;
        $this->hdd = $hdd;
    }

    public function turnon()
    {
        echo "This laptop turned on";
    }

    public function turnoff()
    {
        echo "This laptop turned off";
    }

    private function doSomethingWithDeprication()
    {
        return $this->depreciationCalculation();
    }
}

$myPC = new Laptop("Core-i5", "8GB", "256GB");

echo $myPC->setOwner();
