<?php
   require_once "saiyajin.php";

   $goku = new Saiyajin("goku",1000);
echo $goku->NivelDePelea("Hola soy");

echo "<br><br>";

$vegeta = new Saiyajin("Vegeta",950);
echo $vegeta->NivelDePelea("Mi nombre es");
