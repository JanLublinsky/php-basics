<?php

/*
 1. Write a constructor for the class Movie, which takes the title of the movie,
 studio, and rating as its arguments, and sets the respective class variables to these values.
 2. Write a second constructor for the class Movie, which takes the title of the movie
 and studio as its arguments, and sets the respective class variables to these values,
 while the class variable rating is set to "PG".
 3. Write a method GetPG, which takes an array of base type Movie as its argument,
 and returns a new array of only those movies in the input array with a rating of "PG".
 You may assume the input array is full of Movie instances. The returned array may be empty.
 4. Write a piece of code that creates an instance of the class Movie:
    - with the title “Casino Royale”, the studio “Eon Productions” and the rating “PG­13”;
    - with the title “Glass”, the studio “Buena Vista International” and the rating “PG­13”;
    - with the title “Spider-Man: Into the Spider-Verse”, the studio “Columbia Pictures” and the rating “PG”.
 */

class Movie
{
    public $title;
    public $studio;
    public $rating;

    public function __construct(string $title, string $studio, string $rating)
    {
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }

}

$movie1 = new Movie("Casino Royale", "Eon Productions", "PG-13");
$movie2 = new Movie("Glass", "Buena Vista International", "PG");
$movie3 = new Movie("Spider-Man: Into the Spider-Verse", "Columbia Pictures", "PG");
$movies = [$movie1, $movie2, $movie3];

function GetPG(array $movies): array
{
    $ratedMoviesArr = [];
    foreach ($movies as $key => $movie) {
        $movie->rating === "PG" ? $ratedMoviesArr[$key] = $movie->title : null;
    }
    return $ratedMoviesArr;
}

echo "PG movies listed: \n";
foreach (GetPG($movies) as $item) {
    echo $item . PHP_EOL;
}
