<?php
/*
 * Demonstrate the classes by creating instances of each. Simulate filling the car up with fuel,
and then run a loop that increments the odometer until the car runs out of fuel.
During each loop iteration, print the car’s current mileage and amount of fuel.
 */
include 'fuelgauge.php';
include 'odometer.php';
//creating instances
$fuelgauge = new FuelGauge(40);
$odometer = new Odometer(215978);
//filling the car with fuel
while ($fuelgauge->amount <= 70) {
    $fuelgauge->increaseAmount();

}
echo "Fuel gauge is full. Car is ready to go!\n";
//
$odometer->drive($fuelgauge);