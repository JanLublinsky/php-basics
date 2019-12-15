<?php
/*
 * On your phone keypad, the alphabets are mapped to digits as follows:
 * ABC(2), DEF(3), GHI(4), JKL(5), MNO(6), PQRS(7), TUV(8), WXYZ(9).
Write a program called PhoneKeyPad, which prompts user for a String (case insensitive),
and converts to a sequence of keypad digits.
Use:

a "nested-if" statement
a "switch-case-default" statement

Hint: In switch-case, you can handle multiple cases by omitting the break statement, e.g.,
 */

function PhoneKeyPadIf($string)
{
    $digits = '';
    $string = str_split(strtoupper($string));
    foreach ($string as $letter) {
        if ($letter === "A" || $letter === "B" || $letter === "C") {
            $digits .= 2;
        } elseif ($letter === "D" || $letter === "E" || $letter === "F") {
            $digits .= 3;
        } elseif ($letter === "G" || $letter === "H" || $letter === "I") {
            $digits .= 4;
        } elseif ($letter === "J" || $letter === "K" || $letter === "L") {
            $digits .= 5;
        } elseif ($letter === "M" || $letter === "N" || $letter === "O") {
            $digits .= 6;
        } elseif ($letter === "P" || $letter === "Q" || $letter === "R" || $letter === "S") {
            $digits .= 7;
        } elseif ($letter === "T" || $letter === "U" || $letter === "V") {
            $digits .= 8;
        } else {
            $digits .= 9;
        }
    }
    echo $digits . PHP_EOL;
}

function PhoneKeyPadSwitch($string)
{
    $digits = '';
    $string = str_split(strtoupper($string));
    foreach ($string as $letter) {
        switch ($letter) {
            case 'A':
            case 'B':
            case 'C':
                $digits .= 2;
                break;
            case 'D':
            case 'E':
            case 'F':
                $digits .= 3;
                break;
            case 'G':
            case 'H':
            case 'I':
                $digits .= 4;
                break;
            case 'J':
            case 'K':
            case 'L':
                $digits .= 5;
                break;
            case 'M':
            case 'N':
            case 'O':
                $digits .= 6;
                break;
            case 'P':
            case 'Q':
            case 'R':
            case 'S':
                $digits .= 7;
                break;
            case 'T':
            case 'U':
            case 'V':
                $digits .= 8;
                break;
            default:
                $digits .= 9;
        }
    }
    echo $digits . PHP_EOL;
}

$string = readline("Enter a string:");
$attempts = 0;
while (!ctype_alpha($string)) {
    $string = readline("Invalid input. Please try again(don't use any numbers or special chars: ");
    $attempts++;
    if ($attempts == 2) {
        echo "App have crashed. Please restart.\n";
        exit;

    }
}
PhoneKeyPadIf($string);
PhoneKeyPadSwitch($string);

