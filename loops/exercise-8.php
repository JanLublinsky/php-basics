<?php
/*
 * Write a console program in a class named NumberSquare that prompts the user for two integers,
a min and a max, and prints the numbers in the range from min to max inclusive in a square pattern.
Each line of the square consists of a wrapping sequence of integers increasing from min and max.
The first line begins with min, the second line begins with min + 1, and so on.
When the sequence in any line reaches max, it wraps around back to min.
You may assume that min is less than or equal to max. Here is an example dialogue:

```
Min? 1
Max? 5
12345
23451
34512
45123
51234
```
 */
$min = readline('Min?: ');
$max = readline('Max?: ');

$attempts = 0;
while (!ctype_digit($min) || !ctype_digit($max)) {
    $sum = readline("Invalid input. Please try again: ");
    $attempts++;
    if ($attempts == 3) {
        echo "App have crashed. Please restart.\n";
        exit;
    }
}

class NumberSquare
{
    public function numSquare(int $min, int $max)
    {
        $arr = [];
        for ($j = $min; $j <= $max; $j++) {
            $arr[$j] = $j;
        }
        echo $str = implode('', $arr) . "\n";
        for ($i = $min; $i < $max; $i++) {
            array_push($arr, array_shift($arr));
            echo $str = implode('', $arr) . "\n";
        }
    }
}

$test = new NumberSquare();
$test->numSquare($min, $max);