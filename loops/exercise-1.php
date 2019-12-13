<?php


//todo write a program that displays first 10 natural numbers
$arr = [];
for ($i = 1; $i <= 10; $i++) {
    $arr[$i - 1] = $i;
}
echo "The first 10 natural numbers are: " . implode(" ", $arr) . ".\n";