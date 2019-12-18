<?php


/*
 class Application
{
    function run()
    {
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
                    echo "Bye!";
                    die;
                case 1:
                    $this->add_movies();
                    break;
                case 2:
                    $this->rent_video();
                    break;
                case 3:
                    $this->return_video();
                    break;
                case 4:
                    $this->list_inventory();
                    break;
                default:
                    echo "Sorry, I don't understand you..";
            }
        }
    }

    private function add_movies()
    {
        //todo
    }

    private function rent_video()
    {
        //todo
    }

    private function return_video()
    {
        //todo
    }

    private function list_inventory()
    {
        //todo
    }
}
*/
class VideoStore
{
    public $inventory =[];
    public $ratingReceived=[];
    public $avgRating;

    public function add_video($title)
    {
        $movie=new Video($title,1,0);
        array_push($this->inventory, $movie);
    }

    public function rent_video($title)
    {
        foreach ($this->inventory as $key=>$movie)
        {
            if($movie->title === $title)
            {
                switch($movie->flag)
                {
                    case 0:
                        echo "Movie is rented out. Choose different one.\n";
                        break;
                    default:
                        $movie->flag = 0;
                }
            }
        }
    }

    public function return_video($title)
    {
        foreach ($this->inventory as $key=>$movie)
        {
            if($movie->title === $title)
            {
                switch($movie->flag)
                {
                    case 0:
                        $movie->flag = 1;
                        break;
                }
            }
        }
    }

    public function addRating($rating)
    {
        //array_push($this->ratingReceived[$title]);
    }

    public function list_inventory()
    {
        foreach($this->inventory as $movie)
        {
            echo implode(',',(array)$movie).PHP_EOL;
        }
    }
}

class Video
{
    public $title;
    public $flag;
    public $avgRating;

    public function __construct($title, $flag, $avgRating)
    {
        $this->title = $title;
        $this->flag = $flag;
        $this->avgRating = $avgRating;
    }

    public function checkOut()
    {
        $this->flag = 0;
    }
    public function checkIn()
    {
        $this->flag = 1;
    }
    public function rateVideo(VideoStore $ratingReceived){

    }

    public function setFlag()
    {
        return $this->flag;
    }

}

$test=new VideoStore();
$test->add_video("Matrix");
$test->add_video("Carmelita");
$test->list_inventory();
$test->rent_video("Matrix");
$test->return_video("Matrix");
$test->rent_video("Matrix");
$test->rent_video("Matrix");
$test->checkIn();
/*
$app = new Application();
$app->run();
*/
