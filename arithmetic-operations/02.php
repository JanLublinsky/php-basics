<?php
//Write a program called CheckOddEven which prints "Odd Number" if the int variable “number” is odd,
//or “Even Number” otherwise. The program shall always print “bye!” before exiting.
function CheckOddEven(int $var)
{
    echo $var%2==0 ? 'Even Number' : 'Odd Number'.PHP_EOL;
    echo "Bye!".PHP_EOL;
}

CheckOddEven(5);