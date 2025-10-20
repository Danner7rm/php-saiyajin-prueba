<?php


require_once "saiyajin.php";
require_once "Supersaiyajin.php";


$goku = new Saiyajin(nivel_pelea: 1000, nombre: "goku");
echo $goku->NivelDePelea();

echo "<br><br>";

$vegeta = new Saiyajin(nivel_pelea: 950, nombre: "Vegeta");
echo $vegeta->NivelDePelea();

echo "<br><br>";

$gohan = new Supersaiyajin(nivel_pelea: 1700, nombre: "gohan");
echo $gohan->nombre;
echo "<br><br>";

