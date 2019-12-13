<?php
/*
Summary
An employee gets paid (hours worked) × (base pay), for each hour up to 40 hours.
For every hour over 40, they get overtime = (base pay) × 1.5.
The base pay must not be less than the minimum wage ($8.00 an hour). If it is, print an error.
If the number of hours is greater than 60, print an error message.

Write a method that takes the base pay and hours worked as parameters, and prints the total pay or an error.
Write a main method that calls this method for each of these employees:

Employee | Employee 1 | Employee 2 | Employee 3
Base Pay | $7.50 | $8.20 | $10.00
Hours Worked | 35 | 47 | 73
 */
$employees = [
    [7.50, 35],
    [8.20, 47],
    [10.00, 73]
];

function salaryCalc(int $basePay, int $hoursWorked)
{
    echo $basePay < 8 || $hoursWorked > 60 ? 'Error.' . PHP_EOL : $basePay * $hoursWorked . PHP_EOL;
}

foreach ($employees as $employee) {

    salaryCalc($employee[0], $employee[1]);
}