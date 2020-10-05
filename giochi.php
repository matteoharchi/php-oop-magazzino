<?php
require_once "classes.php";


$game1 = new Giochi('Eldritch Horror', 60, 14, 'GDR', 8, 'Giochi Uniti', 4);
$game1->disponibilita($game1->copie);
var_dump($game1);

$game2 = new Giochi('sulle tracce di Marco Polo', 40, 8, 'Strategia', 5, 'Giochi Uniti', 0);
$game2->disponibilita($game2->copie);
var_dump($game2);

$game3 = new Giochi('Gloom', 20, 10, 'Gioco di carte', 4, 'Uplay', 5);
$game3->disponibilita($game3->copie);
var_dump($game3);

$game4 = new Giochi('Risiko', 30, 8, 'Strategia', 8, 'Editrice Giochi', 10);
$game4->disponibilita($game4->copie);
var_dump($game4);

$game5 = new Giochi('Dominion', 15, 5, 'Gioco di carte', 8, 'DV Giochi', 3);
$game5->disponibilita($game5->copie);
var_dump($game5);