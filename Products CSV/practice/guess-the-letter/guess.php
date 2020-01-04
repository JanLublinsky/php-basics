<?php

$letters = range('a', 'z');
$selectedLetter = $letters[array_rand($letters)];

echo 'Type exit to quit' . PHP_EOL;
echo 'CORRECT: ' . $selectedLetter;
while (true)
{
    $input = readline('Enter letter:');

    if ($input === 'exit')
    {
        break;
    }

    if ($selectedLetter > $input)
    {
        echo 'Go down!';
    } else if ($selectedLetter < $input)
    {
        echo 'Go up!';
    } else {
        echo 'Correct!';
        break;
    }
}