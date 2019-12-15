<?php
//Write a program to accept two integers and return true if the either one is 15 or if their sum or difference is 15.
function compareInts(int $val1, int $val2)
{
    return $val1 == 15 || $val2 == 15 || abs($val1 - $val2) == 15 || abs($val1 + $val2) == 15
        ? 'true' : 'false';
}

echo compareInts(10, -5) . PHP_EOL;



