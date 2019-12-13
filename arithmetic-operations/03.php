<?php
/*
 * Write a program to produce the sum of 1, 2, 3, ..., to 100.
Store 1 and 100 in variables lower bound and upper bound, so that we can change their values easily.
Also compute and display the average. The output shall look like:
The sum of 1 to 100 is 5050
The average is 50.5
 */
function sumAndAvgOfRange(int $start, int $end)
{
    $range=range($start, $end);
    $sum=array_sum($range);
    echo 'The sum of ' . $start . ' to ' . $end . ' is ' . $sum.PHP_EOL;
    echo 'The average is '. $sum/count($range).PHP_EOL;
}

sumAndAvgOfRange(1, 100);