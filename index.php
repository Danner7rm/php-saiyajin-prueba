<?php
   require_once "saiyajin.php";

   $goku = new Saiyajin(nivel_pelea:1000,nombre:"goku");
echo $goku->NivelDePelea("Hola soy");

echo "<br><br>";

$vegeta = new Saiyajin(nivel_pelea:950,nombre:"Vegeta");
echo $vegeta->NivelDePelea("Mi nombre es");
