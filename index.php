<?php


require_once "autoload.php";

use App\Clases\Saiyajin;
use App\Clases\SuperSaiyajin;


$goku = new Saiyajin(nivel_pelea: 1000, nombre: "goku");
echo $goku->Saludar();

echo "<br><br>";

$goten = new Saiyajin(nivel_pelea: 950, nombre: "goten");
echo $goten->Saludar();






