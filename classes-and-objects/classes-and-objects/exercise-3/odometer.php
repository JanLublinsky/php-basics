<?php
/*
 * The Odometer Class: This class will simulate the car’s odometer. Its responsibilities are as follows:

- To know the car’s current mileage.
- To report the car’s current mileage.
- To be able to increment the current mileage by 1 kilometer.
The maximum mileage the odometer can store is 999,999 kilometer.
When this mileage is exceeded, the odometer resets the current mileage to 0.
- To be able to work with a FuelGauge object.
It should decrease the FuelGauge object’s current mileage of fuel by 1 liter for every 10 kilometers traveled.
(The car’s fuel economy is 10 kilometers per liter.)
 */

class Odometer
{
    public $mileage;

    public function __construct(int $mileage)
    {
        $this->mileage = $mileage;
    }

    public function reportMileage(): void
    {
        echo "Car’s current mileage: $this->mileage kilometers\n";
    }

    public function increaseMileage(): void
    {
        $this->mileage < 999999 ? $this->mileage++ : $this->mileage = 0;
    }

    public function drive(FuelGauge $fuelgauge)
    {
        while ($fuelgauge->amount > 0) {
            $fuelgauge->decreaseAmount();
            for ($i = 0; $i < 10; $i++) {
                $this->increaseMileage();
            }
            $fuelgauge->reportAmount();
            $this->reportMileage();
            echo "\n";
        }

    }
}