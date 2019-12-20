<?php

$surveyed = 12467;

function calculate_energy_drinkers(int $numberSurveyed)
{
    $purchased_energy_drinks = 0.14;
    if ($numberSurveyed === 0) throw new LogicException(";(");
    return round($numberSurveyed * $purchased_energy_drinks);

}

function calculate_prefer_citrus(int $numberSurveyed)
{
    $prefer_citrus_drinks = 0.64;
    if ($numberSurveyed === 0) throw new LogicException(";(");
    return round($numberSurveyed * $prefer_citrus_drinks);
}

echo "Total number of people surveyed " . $surveyed . ".\n";
echo "Approximately " . calculate_energy_drinkers($surveyed) . " bought at least one energy drink.\n";
echo calculate_prefer_citrus(calculate_energy_drinkers($surveyed)) . " of those " . "prefer citrus flavored energy drinks.\n";
