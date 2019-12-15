<?php

function display_board()
{
    echo "   |   |   \n";
    echo "---+---+---\n";
    echo "   |   |   \n";
    echo "---+---+---\n";
    echo "   |   |   \n";
}

echo ":::Tic-Tac-Toe Game Started:::\n";
display_board();

$board = [
    ["   ", "   ", "   "],
    ["   ", "   ", "   "],
    ["   ", "   ", "   "]
];

$i = 0;
$turn = ' X ';
$winner = "Player '" . $turn . "' have Won!" . PHP_EOL . "Launch the game to play again.\n";
while ($i < 9) {
    //Player entry
    $choice = array_values(array_filter(array_map('intval', str_split(
        readline("'" . trim($turn) . "', choose your location (row(0-2), column(0-2)): "))), 'is_numeric'));
    if (count($choice) === 2) {
        //Board position validation0
        if (isset($board[$choice[0]][$choice[1]])) {
            if ($board[$choice[0]][$choice[1]] == "   ") {
                $board[$choice[0]][$choice[1]] = $turn;
                $turn == ' X ' ? $turn = ' O ' : $turn = ' X ';
                $i++;
                foreach ($board as $line) {
                    echo implode('|', $line) . PHP_EOL;
                    echo "---+---+---" . PHP_EOL;
                }
                //Winner validation
                foreach ($board as $line) {
                    if ($line[0] == $turn && $line[1] == $turn && $line[2] == $turn) {
                        die($winner);
                    }
                }
                if ($board[0][0] == $turn && $board[1][1] == $turn && $board[2][2] == $turn) {
                    die($winner);
                }
                if ($board[0][2] == $turn && $board[1][1] == $turn && $board[2][0] == $turn) {
                    die($winner);
                }
                if (array_column($board, 0) == $turn || array_column($board, 1) == $turn
                    || array_column($board, 2) == $turn) {
                    die($winner);
                }
            } else {
                $choice = explode(" ", readline("This position is taken. Please choose different position.: "));
            }

        } else {
            $choice = explode(" ", readline("Something went wrong. Please try again.: "));
        }
    } else {
        $choice = explode(" ", readline("Something went wrong. Please try again.: "));
    }
}
echo "The game is a tie.\n";
