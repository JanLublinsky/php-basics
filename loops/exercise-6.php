<?php

/*
 * Write a console program in a class named *AsciiFigure* that draws a figure of the following form,
using for loops.

```
////////////////\\\\\\\\\\\\\\\\
////////////********\\\\\\\\\\\\
////////****************\\\\\\\\
////************************\\\\
********************************
```

Then, modify your program using an integer **class constant** so that it can create a similar figure
of any size. For instance, the diagram above has a size of 5. For example, the figure below has a size of 3:

```
////////\\\\\\\\
////********\\\\
****************
```

And the figure below has a size of 7:

```
////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\
////////////////////********\\\\\\\\\\\\\\\\\\\\
////////////////****************\\\\\\\\\\\\\\\\
////////////************************\\\\\\\\\\\\
////////********************************\\\\\\\\
////****************************************\\\\
************************************************
```

 */
echo "AsciiFigure.app initiated\n";
$size = readline("Please enter size of the figure(1>): ");
$attempts = 0;
while (!ctype_digit($size) || $size < 2) {
    $size = readline("Invalid input. Please try again: ");
    $attempts++;
    if ($attempts == 3) {
        echo "App have crashed. Please restart.\n";
        exit;
    }
}

class AsciiFigure
{
    public function drawing(int $size)
    {
        $stars = 0;
        $lStripes = 4 * ($size - 1);
        $rStripes = 4 * ($size - 1);
        for ($i = $size; $i > 0; $i--) {
            for ($l = $lStripes; $l > 0; $l--) {
                echo '/';
            }
            for ($j = $stars; $j > 0; $j--) {
                echo '*';
            }
            for ($r = $rStripes; $r > 0; $r--) {
                echo '\\';
            }
            echo "\n";
            $stars += 8;
            $lStripes -= 4;
            $rStripes -= 4;
        }
    }
}

$ascii = new AsciiFigure();
$ascii->drawing($size);