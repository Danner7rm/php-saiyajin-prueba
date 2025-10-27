<?php



require_once "App/Traits/tecnicasSimples.php";
require_once "App/Traits/tecnicasEspeciales.php";
require_once "App/Traits/tecnicasCombinadas.php";
require_once "App/Clases/Saiyajin.php";
require_once "App/Clases/Supersaiyajin.php";
require_once "App/Otras/Saiyajin.php";

use App\Clases\Saiyajin;
use App\Clases\SUperSaiyajin;
use App\Otras\Saiyajin as OtroSaiyajin;

$goku = new OtroSaiyajin(nivel_pelea: 1000, nombre: "goku");
echo $goku->Saludar();

echo "<br><br>";

$goten = new Saiyajin(nivel_pelea: 950, nombre: "goten");
echo $goten->Saludar();

echo "<br><br>";

$vegeta = new Saiyajin(nivel_pelea: 950, nombre: "Vegeta");
echo $vegeta->MostrarColorCabello();

echo "<br><br>";



$gohan = new App\Clases\Saiyajin(nivel_pelea: 1500, nombre: "gohan");
echo $gohan->UsarKamehameha();
