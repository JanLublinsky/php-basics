<?php
$length=readline("Please enter game board's length: ");
$width=readline("Please enter game board's width: ");
while ($length < 1 || $width < 1)
{
    echo "Wrong input. Please try again.\n";
    $length=readline("Please enter game board's length: ");
    $width=readline("Please enter game board's width: ");
}
echo " ";
for($i=0;$i<$length;$i++)
{

    echo "--- ";
}
echo "\n";
for ($j=0;$j<$width;$j++)
{
    for ($i=0;$i<=$length;$i++)
    {
        echo "|   ";
    }
    echo "\n ";
    for($i=0;$i<$length;$i++)
    {

        echo "--- ";
    }
    echo "\n";
}
