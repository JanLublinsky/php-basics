<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];

//todo
echo "Original numeric array: \n";

foreach($numbers as $number)
{
    echo $number.', ';
}
echo "\n";

//todo
echo "Sorted numeric array: \n";

sort($numbers);
foreach($numbers as $number)
{
    echo $number.', ';
}
echo "\n";

$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];

//todo
echo "Original string array: \n";

foreach($words as $word)
{
    echo $word.', ';
}
echo "\n";

//todo
echo "Sorted string array: \n";

sort($words);
foreach($words as $word)
{
    echo $word.', ';
}
echo "\n";