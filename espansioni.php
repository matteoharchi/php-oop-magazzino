<?php 
require_once "classes.php";
require_once "giochi.php";

$espansione1 = new Espansione ('Strane rovine', 10, 14, "GDR", 8, "Giochi Uniti", 2);
$espansione1->whatFor($espansione1, $game1->nome);
var_dump($espansione1);