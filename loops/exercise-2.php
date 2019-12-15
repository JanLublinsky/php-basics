<?php

//todo complete loop to multiply i with itself n times, it is NOT allowed to use built-in pow() function

if (isset($argv[1]) && is_numeric($argv[1]) && $argv[1]) {
    $n = $argv[1];
    $i = 2;
    $total = $i;
    while ($n > 1) {
        $total *= $i;
        $n--;
    }
    echo "After " . $argv[1] . " iterations i equals " . $total . ".\n";
} else echo "Invalid input. Please try again." . PHP_EOL;
