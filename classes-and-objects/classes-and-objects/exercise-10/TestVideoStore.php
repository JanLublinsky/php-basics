<?php
include 'Video.php';
include 'VideoStore.php';

class TestVideoStore
{
    private $videoStore;

    public function __construct()
    {
        $this->videoStore = new VideoStore();
    }

    public function testAddVideo(): bool
    {
        $this->videoStore->addVideo(new Video('The Matrix'));
        $this->videoStore->addVideo(new Video('Godfather II'));
        $this->videoStore->addVideo(new Video('Star Wars Episode IV: A New Hope'));
        return $this->videoStore->videoCount() === 3;
    }

    public function testCheckInOutVideo(): bool
    {
        $arrayBoolVideo = [];
        foreach ($this->videoStore->getVideos() as $key => $video) {
            $this->videoStore->checkOutVideo($video->getTitle());
            $this->videoStore->checkInVideo($video->getTitle());
            if ($video->getFlag() === true) {
                $arrayBoolVideo[$key] = true;
            } else {
                $arrayBoolVideo[$key] = false;
            }
        }
        return !in_array(false, $arrayBoolVideo) ? true : false;
    }

    public function testListVideos()
    {
        $this->videoStore->checkOutVideo("Godfather II");
        //$this->videoStore->getVideo("Godfather II")->checkOutVideo();
        $amountListed = $this->videoStore->listVideos();
        if ($amountListed == 2) {
            return true;
        } else {
            return false;
        }
    }

    public function testReceiveRating(): bool
    {
        $this->videoStore->receiveRating("The Matrix", 10);
        $this->videoStore->receiveRating("The Matrix", 6);
        $this->videoStore->receiveRating("The Matrix", 5);
        $this->videoStore->receiveRating("Godfather II", 10);
        $this->videoStore->receiveRating("Godfather II", 8);
        $this->videoStore->receiveRating("Star Wars Episode IV: A New Hope", 10);
        if ($this->videoStore->getVideo("The Matrix")->getAverageRating() == 7
            && $this->videoStore->getVideo("Godfather II")->getAverageRating() == 9
            && $this->videoStore->getVideo("Star Wars Episode IV: A New Hope")->getAverageRating() == 10) {
            return true;
        } else {
            return false;
        }
    }

}

$testVideoStore = new TestVideoStore();

echo 'VideoStore::videoCount() - ';
echo $testVideoStore->testAddVideo() ? 'PASSED' : 'FAILED';
echo PHP_EOL;

echo "VideoStore::checkOutVideo() - \n";
echo $testVideoStore->testCheckInOutVideo() ? 'PASSED' : 'FAILED';
echo PHP_EOL;

echo "VideoStore::listInventory() - \n";
echo $testVideoStore->testListVideos() ? 'PASSED' : 'FAILED';
echo PHP_EOL;

echo 'VideoStore::receiveRating() - ';
echo $testVideoStore->testReceiveRating() ? 'PASSED' : 'FAILED';
echo PHP_EOL;

