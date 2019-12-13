<?php
$entry = 1;
while ($entry) {
    $array = ['neglect', 'abate', 'cookie', 'junior', 'developer', 'senior', 'leviathan', 'rollton', 'translator', 'kettle'];
    $word = str_split($array[array_rand($array)]);
    $hiddenWord = str_replace($word, '_', $word);
    $misses = '';
    echo "Game Hangman\n";
    echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-\n\n";

    while ($hiddenWord != $word && strlen($misses) < 5) {
        echo "Word: " . implode(' ', $hiddenWord) . "\n\n";
        echo "Misses: " . $misses . "\n\n";
        $guess = readline("Guess: ");
        while (!ctype_alpha($guess) || strlen($guess)>1) {
            $guess = readline("Invalid input. Guess again: ");
        }
        switch ($guess) {

            case in_array($guess, $word):
                $keys = array_keys($word, $guess);
                foreach ($keys as $key) {
                    $hiddenWord[$key] = $guess;
                }
                break;
            default:
                $misses .= $guess;
        }
        echo "\n";
        echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-\n\n";
    }

    echo strlen($misses) < 5 ? "Word: " . implode(' ', $hiddenWord) . "\n\n"
        . "Misses: " . $misses . "\n\n"
        . "YOU GOT IT!" . "\n"
        : "Game Over. You are out of attempts.\n";
    $entry = readline('Play "again" or "quit"(1/0)? ');
    $attempts = 0;
    while (!ctype_digit($entry) && $entry !== 1 || $entry !== 0) {
        $entry = readline('Play "again" or "quit"(1/0)? ');
        $attempts++;
        if ($attempts == 2) {
            echo "App have crashed. Please restart.\n";
            exit;

        }
        var_dump($entry);
    }
}
