<?php

$file = fopen('invoices.csv', 'r');
$invoices = [];
$i = 0;
while (($line = fgetcsv($file)) !== FALSE) {
    $string = implode(',', $line);
    $invoices[$i] = explode("\t", $string);
    $i++;
}
fclose($file);

function sortCountry($a, $b)
{
    return ($a[4] <= $b[4]) ? -1 : 1;
}

usort($invoices, "sortCountry");

$uniqueCountries = array_values(array_unique(array_column($invoices, 4)));

echo str_pad("--- Totals ---", 52, " ", STR_PAD_BOTH) . "\n";
echo "| Country | Excluding tax | Including tax | " . str_pad("Tax", 12) . "|\n";
$includingTax = 0;
$excludingTax = 0;
$tax = 0;
$longestTax = [];
for ($i = 0; $i < count($uniqueCountries); $i++) {
    foreach ($invoices as $key => $invoice) {
        if ($invoice[4] === $uniqueCountries[$i]) {
            $includingTax += $invoice[5];
            $excludingTax += $invoice[6];
        }
    }
    $tax += $includingTax - $excludingTax;
    $longestTax[$i] = $tax;
    echo "| " . str_pad($uniqueCountries[$i], strlen("Country "))
        . "| " . str_pad(number_format((float)$excludingTax, 2, '.', ''), strlen("Excluding tax "))
        . "| " . str_pad(number_format((float)$includingTax, 2, '.', ''), strlen("Including tax "))
        . "| " . str_pad(number_format((float)$tax, 2, '.', ''), 12) . "|" . PHP_EOL;
    $includingTax = 0;
    $excludingTax = 0;
    $tax = 0;
}

function sortDate($a, $b)
{

    $a[3]=substr($a[3], 0, 2)."-".substr($a[3], 2, 2)."-".substr($a[3], 4, 4);
    $b[3]=substr($b[3], 0, 2)."-".substr($b[3], 2, 2)."-".substr($b[3], 4, 4);
    //var_dump(strtotime($a[3]));die;
    $t1 = strtotime($a[3]);
    $t2 = strtotime($b[3]);
    //echo $t1;
    return $t1 - $t2;
}
usort($invoices, 'sortDate');

$invoicesToCSVfile= fopen('test.csv', 'w');
foreach ($invoices as $invoice) {
    fputcsv($invoicesToCSVfile, $invoice, ' ');
}
fclose($invoicesToCSVfile);
