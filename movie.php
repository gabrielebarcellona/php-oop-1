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

    public function GetTitle2()
    {
        return $this->title . '<br>';
    }
}
