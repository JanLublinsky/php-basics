<?php
$number = readline("Enter the number: ");

//todo Write a program that reads an positive integer and count the number of digits the number has.
$attempts = 0;
while($number<0 || !ctype_digit($number))
{
    $number = readline("Invalid input.Please try again: ");
    $attempts++;
    if ($attempts == 3) {
        echo "App have crashed. Please restart.\n";
        exit;
    }
}
    function countDigits($number)
{
    echo "Number of digits: " . count(str_split($number)) . PHP_EOL;
}

countDigits($number);