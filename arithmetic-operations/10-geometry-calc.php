<?php

/*
 * See calculate-area.php
Design a Geometry class with the following methods:

A static method that accepts the radius of a circle and returns the area of the circle. Use the following formula:

Area = π * r * 2
Use Math.PI for π and r for the radius of the circle

A static method that accepts the length and width of a rectangle and returns the area of the rectangle.
Use the following formula:

Area = Length x Width

A static method that accepts the length of a triangle’s base and the triangle’s height.
The method should return the area of the triangle. Use the following formula:

Area = Base x Height x 0.5

The methods should display an error message if negative values are used for the circle’s radius,
the rectangle’s length or width, or the triangle’s base or height.
 */

class Geometry
{
    public static function circleArea(int $r)
    {
        return $r >= 0 ? round(M_PI * ($r ^ 2), 2) : die("Wrong input. Please try again.\n");
    }

    public static function rectangleArea(int $length, int $width)
    {
        return $length >= 0 && $width >= 0 ? $length * $width : die("Wrong input. Please try again.\n");
    }

    public static function triangleArea(int $base, int $height)
    {
        return $base >= 0 && $height >= 0 ? 0.5 * $base * $height : die("Wrong input. Please try again.\n");
    }
}

