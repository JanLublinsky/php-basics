<?php

/*
 * The FuelGauge Class: This class will simulate a fuel gauge. Its responsibilities are as follows:

 - To know the car’s current amount of fuel, in liters.
 - To report the car’s current amount of fuel, in liters.
 - To be able to increment the amount of fuel by 1 liter.
 This simulates putting fuel in the car. ( The car can hold a maximum of 70 liters.)
 - To be able to decrement the amount of fuel by 1 liter,
 if the amount of fuel is greater than 0 liters. This simulates burning fuel as the car runs.
 */

class FuelGauge
{
    public $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function reportAmount()
    {
        echo "Car’s current amount of fuel: $this->amount litres\n";
    }

    public function increaseAmount()
    {
        $this->amount <= 70 ? $this->amount++ : print "Fuel gauge is full.\n";
    }

    public function decreaseAmount()
    {
        $this->amount > 0 ? $this->amount-- : print "Fuel gauge is empty.\n";
    }
}