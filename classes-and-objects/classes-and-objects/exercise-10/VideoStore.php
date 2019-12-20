<?php

class VideoStore
{
    private $videos = [];

    public function addVideo(Video $video): void
    {
        $this->videos [] = $video;
    }

    public function videoCount(): int
    {
        return count($this->videos);
    }

    public function checkOutVideo(string $title)
    {
        if (count($this->videos) < 1) {
            echo "Video Store is empty. Please come again later.";
        } else {
            foreach ($this->videos as $video) {
                if ($video->getTitle() === $title && $video->getFlag() === true) {
                    $video->setFlag(false);
                    echo "You rented $title." . PHP_EOL;
                } elseif ($video->getTitle() === $title && $video->getFlag() === false) {
                    echo "Requested video is rented." . PHP_EOL;
                }
            }
        }
    }

    public function checkInVideo(string $title): void
    {
        foreach ($this->videos as $video) {
            if ($video->getTitle() === $title && $video->getFlag() === false) {
                $video->setFlag(true);
                echo "You returned $title." . PHP_EOL;
            } elseif ($video->getTitle() === $title && $video->getFlag() === true) {
                echo "Requested video is already on shelf." . PHP_EOL;
            }
        }
    }

    public function receiveRating(string $title, int $rating)
    {
        if (count($this->videos) >= 1) {
            foreach ($this->videos as $video) {
                if ($video->getTitle() === $title) {
                    $video->addRating($rating);
                }
            }
        } else {
            echo "The requested video not found." . PHP_EOL;
        }
    }

    public function listVideos()
    {
        $inStock = 0;
        echo "\nTitle  |  Rating  |  Availability\n";
        foreach ($this->videos as $video) {
            if ($video->getFlag() === true) {
                $status = 'Available';
                $inStock++;
            } else {
                $status = 'Rented';
            }
            echo $video->getTitle() . " | " . $video->getAverageRating() . " | " . $status . PHP_EOL;
        }
        return $inStock;
    }

    public function getVideos(): array
    {
        return $this->videos;
    }

    public function getVideo($title)
    {
        foreach ($this->videos as $key => $video) {
            if ($title === $video->getTitle()) {
                return $video;
            }
        }
    }
}
