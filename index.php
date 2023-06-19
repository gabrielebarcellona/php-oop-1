<?php

include __DIR__ . '/movie.php';


$film = new movie('The Conjuring - Il caso Enfield', 'HORROR', 'Vera Farmiga', '2016 ');

echo $film->GetTitle();
