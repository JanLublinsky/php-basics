<?php

class Application
{

    function run()
    {
        $videoStore = new VideoStore();
        while (true) {
            echo "Choose the operation you want to perform \n";
            echo "Choose 0 for EXIT\n";
            echo "Choose 1 to fill video store\n";
            echo "Choose 2 to rent video (as user)\n";
            echo "Choose 3 to return video (as user)\n";
            echo "Choose 4 to list inventory\n";

            $command = (int)readline();

            switch ($command) {
                case 0:
                    echo "Bye!\n";
                    die;
                case 1:
                    $title = readline('Title: ') . PHP_EOL;
                    $videoStore->addVideo(new Video($title, true, 0));
                    break;
                case 2:
                    $title = readline('Title: ') . PHP_EOL;
                    $videoStore->checkOutVideo($title);
                    break;
                case 3:
                    $title = readline('Title: ') . PHP_EOL;
                    $videoStore->checkInVideo($title);
                    break;
                case 4:
                    $videoStore->listVideos();
                    break;
                case 5:
                    $title = readline('Title: ') . PHP_EOL;
                    $rating = readline('Rate: ') . PHP_EOL;
                    $videoStore->receiveRating($title, $rating);
                    break;
                default:
                    echo "Sorry, I don't understand you..";
            }
        }
    }
}

$app = new Application();
$app->run();