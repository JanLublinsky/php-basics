<?php

class Video
{
    private $title;
    private $flag = true;
    public $ratings = [];

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getFlag(): bool
    {
        return $this->flag;
    }

    public function setFlag($checkOut): bool
    {
        return $this->flag = $checkOut;
    }

    public function addRating(int $rating)
    {
        $this->ratings [] = $rating;
    }

    public function getAverageRating(): float
    {
        $sum = 0;
        if (count($this->ratings) === 0) {
            return 0;
        } else {
            foreach ($this->ratings as $rating) {
                $sum += $rating;
            }
            return $sum / count($this->ratings);
        }
    }
}