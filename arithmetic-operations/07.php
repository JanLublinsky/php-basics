<?php
/*
 * Modify the example program to compute the position of an object after falling for 10 seconds, outputting the position in
meters. The formula in Math notation is:
Gravity formula
Note: The correct value is -490.5m.
x(t)=0.5 x at^2 + viT + Xi 490.5(t)
*/
    function gravityFall(int $initialVelocity, int $initialPosition, int $fallingTime) {
        $gravity = -9.81;
        $fallingTime = 10;

        $x = (0.5 * (($gravity * ($fallingTime*$fallingTime))
            + ($initialVelocity * $fallingTime) + ($initialPosition)));
        echo $x;
    }

gravityFall(0,0,10);