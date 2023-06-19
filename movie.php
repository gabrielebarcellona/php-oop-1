<?php
class Movie
{
    public $generes;
    public $title;
    public $description;
    public $personages;

    public function __construct($generes, $title, $description, $personages)
    {
        $this->$generes = $generes;
        $this->$title = $title;
        $this->$description = $description;
        $this->$personages = $personages;
    }
}
