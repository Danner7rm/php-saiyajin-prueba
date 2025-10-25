<?php



require_once "traits/tecnicasSimples.php";
require_once "traits/tecnicasEspeciales.php";
require_once "traits/tecnicasCombinadas.php";
require_once "saiyajin.php";
require_once "Supersaiyajin.php";

$goku = new Saiyajin(nivel_pelea: 1000, nombre: "goku");
echo $goku->UsarKamehameha();

echo "<br><br>";

$vegeta = new Saiyajin(nivel_pelea: 950, nombre: "Vegeta");
echo $vegeta->MostrarColorCabello();

echo "<br><br>";


$gohan = new Saiyajin(nivel_pelea: 1500, nombre: "gohan");
echo $gohan->UsarKamehameha();
