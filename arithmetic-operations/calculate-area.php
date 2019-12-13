<?php
/*
 * Next write a program to test the class, which displays the following menu and responds to the user’s selection:
Geometry calculator:
Display an error message if the user enters a number outside the range of 1 through 4 when selecting an item from the menu.
 */
include '10.php';
echo ":::Geometry Calculator:::\n";
echo "1. Calculate the Area of a Circle.\n";
echo "2. Calculate the Area of a Rectangle.\n";
echo "3. Calculate the Area of a Triangle.\n";
echo "4. Quit\n";
$choice = readline("Enter your choice (1-4) : \n");
echo in_array($choice, range(1, 4)) ? '' : "Error. Please try again.\n";
switch ($choice) {
    case 1:
        echo "Calculate the Area of a Circle:\n";
        $radius = readline("Enter radius of a circle: \n");
        echo "Circle area equals: "
            . Geometry::circleArea($radius) . " m2.\n";
        break;
    case 2:
        echo "Calculate the Area of a Rectangle:\n";
        $length = readline("Enter length of a rectangle: \n");
        $width = readline("Enter width of a rectangle: \n");
        echo "Rectangle area equals: "
            . Geometry::rectangleArea($length, $width) . " m2.\n";
        break;
    case 3:
        echo "Calculate the Area of a Triangle:\n";
        $base = readline("Enter base of a triangle: \n");
        $height = readline("Enter height of a triangle: \n");
        echo "Triangle area equals: "
            . Geometry::triangleArea($base, $height) . " m2.\n";
        break;
    case $choice<0 || $choice>4:
        echo "Quitting the program.\n";
        break;
}




