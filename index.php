<?php
require_once "luchador.php";
require_once "combate.php";

$luchador1 = new Luchador ("Martín Karadagián", 10, 8, 6);
$luchador2 = new Luchador ("La Momia", 10, 8, 6);

$combate = new Combate ($luchador1, $luchador2);
$combate->combatir();

?>