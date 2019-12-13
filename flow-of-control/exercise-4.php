<?php
/*
 * Write a program which prints “Sunday”, “Monday”, ... “Saturday”
 * if the int variable "dayNumber" is 0, 1, ..., 6, respectively.
 *  Otherwise, it shall print "Not a valid day".

Use:

 - a "nested-if" statement
 - a "switch-case-default" statement.

 */
$dayNumber = readline("Enter the number(0-6): ");
$range=range(0,6);

if (!ctype_digit($dayNumber)&&!in_array($dayNumber,$range))
{
    echo "Not a valid day.\n";
    exit;
}
function dayOfTheWeekSwitch(int $dayNumber)
{
    switch($dayNumber)
    {
        case 1:
            echo "Tuesday";
            break;
        case 2:
            echo "Wednesday";
            break;
        case 3:
            echo "Thursday";
            break;
        case 4:
            echo "Friday";
            break;
        case 5:
            echo "Saturday";
            break;
        case 6:
            echo "Sunday";
            break;
        default:
            echo "Monday";
    }
    echo "\n";
}
//dayOfTheWeekSwitch($dayNumber);

function dayOfTheWeekIf(int $dayNumber)
{
    if($dayNumber===0) echo "Monday";
    else if ($dayNumber===1) echo "Tuesday";
    else if ($dayNumber===2) echo "Wednesday";
    else if ($dayNumber===3) echo "Thursday";
    else if ($dayNumber===4) echo "Friday";
    else if ($dayNumber===5) echo "Saturday";
    else if ($dayNumber===6) echo "Sunday";
    echo "\n";
}
dayOfTheWeekIf($dayNumber);
