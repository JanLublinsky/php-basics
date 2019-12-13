<?php
//Write a program to compute the product of integers from 1 to 10 (i.e., 1×2×3×...×10),
// as an int. Take not that it is the same as factorial of N.
function factorial(int $num)
{
    $factorial = 1;
    for ($i = $num; $i >= 1; $i--) {
        $factorial *= $i;
    }
    echo "Factorial of $num equals $factorial." . PHP_EOL;
}

factorial(5);