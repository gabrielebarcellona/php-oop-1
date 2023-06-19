<?php
class Movie
{
    public $title;
    public $generes;
    public $protagonist;
    public $date;

    public function __construct($title, $generes, $protagonist,$date)
    {
        $this->$title = $title;
        $this->$generes = $generes;
        $this->$personages = $personages;
        $this->$date = $date
    }

    public function GetTitle()
    {
        return $this->title ,
    }
}
