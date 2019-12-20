<?php
//Create a class called *Date* that includes: three pieces of information as instance variables — a month, a
//day and a year.
//
//Your class should have a constructor that initializes the three instance variables and assumes that
//the values provided are correct.
//Provide a set and a get for each instance variable.
//
//Provide a method DisplayDate that displays the month, day and year separated by forward slashes */*.
//
//Write a test application named DateTest that demonstrates class *Date* capabilities.
class Date
{
    private $day;
    private $month;
    private $year;

    public function __construct(int $day, int $month, int $year)
    {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }

    public function setDay($day)
    {
        $this->day = $day;
    }

    public function getDay()
    {
        return $this->day;
    }

    public function setMonth($month)
    {
        $this->month = $month;
    }

    public function getMonth()
    {
        return $this->month;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function DisplayDate()
    {
        if ($this->year % 4 == 0 && $this->month == 2 && $this->day > 29) {
            echo "Invalid date input" . PHP_EOL;
        } else if ($this->year % 4 != 0 && $this->month == 2 && $this->day > 28) {
            echo "Invalid date input" . PHP_EOL;
        } else if (in_array($this->day, range(1, 31)) &&
            in_array($this->month, range(1, 12)) && in_array($this->year, range(1, 3000))) {
            echo $this->day . "/" . $this->month . "/" . $this->year . PHP_EOL;
        } else {
            echo "Invalid date input" . PHP_EOL;
        }
    }
}

class DateTest
{
    public static function main()
    {
        $date1 = new Date(1, 1, 1);
        $date2 = new Date(0, 0, 0);
        $date3 = new Date(31, 2, 2019);
        $date4 = new Date(32, 30, 1930);
        $date5 = new Date(100, 500, 100500);
        $date6 = new Date(29, 2, 2020);
        $date7 = new Date(-29, -2, -423);

        echo ":Test:\n";
        $dates = [$date1, $date2, $date3, $date4, $date5, $date6, $date7];
        foreach ($dates as $key => $date) {
            echo $key + 1 . ". ";
            $date->DisplayDate();
        }

    }
}

DateTest::main();

