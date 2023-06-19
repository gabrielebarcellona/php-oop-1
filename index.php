<?php

include __DIR__ . '/movie.php';


$film = new movie('The Conjuring - Il caso Enfield', 'HORROR', 'Vera Farmiga', '2016 ');

echo $film->GetTitle();
echo $film->generes;
echo '<br>';
echo $film->protagonist;
echo '<br>';
echo $film->date;
echo '<br>';
echo '<br>';
echo '<br>';

$film2 = new movie('The Amazing Spider-Man', 'FANTASY', 'Andrew Garfield', '2012 ');

echo $film2->GetTitle2();
echo $film2->generes;
echo '<br>';
echo $film2->protagonist;
echo '<br>';
echo $film2->date;
