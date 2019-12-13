<?php
/*
 * Write a program called coza-loza-woza.php which prints the numbers 1 to 110, 11 numbers per line.
The program shall print "Coza" in place of the numbers which are multiples of 3, "Loza" for multiples of 5,
"Woza" for multiples of 7, "CozaLoza" for multiples of 3 and 5, and so on. The output shall look like:
1 2 Coza 4 Loza Coza Woza 8 Coza Loza 11
Coza 13 Woza CozaLoza 16 17 Coza 19 Loza CozaWoza 22
23 Coza Loza 26 Coza Woza 29 CozaLoza 31 32 Coza
 */
function CozaLozaWoza(int $start, int $end)
{
    $count = 0;
    for ($i = $start; $i <= $end; $i++) {
        switch ($i) {
            case $i % 3 == 0 && $i % 5 == 0:
                echo "CozaLoza ";
                break;
            case $i % 3 == 0 && $i % 7 == 0:
                echo "CozaWoza ";
                break;
            case $i % 7 == 0 && $i % 5 == 0:
                echo "LozaWoza ";
                break;
            case $i % 3 == 0:
                echo "Coza ";
                break;
            case $i % 5 == 0:
                echo "Loza ";
                break;
            case $i % 7 == 0:
                echo "Woza ";
                break;
            default:
                echo $i . " ";
        }
        $count++;
        if ($count === 11) {
            echo "\n";
            $count = 0;
        }
    }
    echo '' . PHP_EOL;
}

CozaLozaWoza(1, 33);