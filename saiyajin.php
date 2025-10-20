<?php

//se creo un atributo por medio de unac

class Saiyajin
{
  public string $nombre;
  public  int $nivel_pelea;
  public string $clase = "Saiyajin";


  public function __construct($nombre,$nivel_pelea) {
    $this->nombre = $nombre;
    $this->nivel_pelea = $nivel_pelea;
  }

  public function Saludar($texto)
  {
    return $texto . $this->nombre;
  }
  public function NivelDePelea()
  {
    return $this->nombre . " tiene un nivel de pelea de " . $this->nivel_pelea . " y pertenece a la clase " . $this->clase;
  }
}





