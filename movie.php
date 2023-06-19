<?php
class Movie
{
    public $title;
    public $generes;
    public $protagonist;
    public $date;

    public function __construct($title, $generes, $protagonist, $date)
    {
        $this->title = $title;
        $this->generes = $generes;
        $this->protagonist = $protagonist;
        $this->date = $date;
    }

    public function GetTitle()
    {
        return $this->title . '<br>';
    }
}

class Movie2
{
    public $title2;
    public $generes;
    public $protagonist;
    public $date;

    public function __construct($title2, $generes, $protagonist, $date)
    {
        $this->title2 = $title2;
        $this->generes = $generes;
        $this->protagonist = $protagonist;
        $this->date = $date;
    }

    public function GetTitle2()
    {
        return $this->title2 . '<br>';
    }
}
