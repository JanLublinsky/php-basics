<?php
/*
 * Write a program that asks the user to enter two words. The program then prints out both words on one line.
The words will be separated by enough dots so that the total line length is 30:

```
Enter first word:
turtle
Enter second word
153
turtle....................153
```

This could be used as part of an index for a book. To print out the dots, use `echo "."` inside a loop body.

 */
$word1 = readline("Please enter first word: ");
$word2 = readline("Please enter second word: ");
function twoWordsOneLine($word1, $word2)
{
    $i = strlen($word1 . $word2);
    echo $word1;
    while ($i < 30) {
        echo ".";
        $i++;
    }
    echo $word2;
}

twoWordsOneLine($word1, $word2);