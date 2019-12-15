<?php

$number = intval(readline("Enter the number: "));
//todo print if number is positive or negative
if (!empty($number)) {
    echo $number > 0 ? "Positive.\n" : "Negative.\n";
} else echo "The number is zero. Which is a neutral number.\n";
