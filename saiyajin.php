<?php

//se creo un atributo por medio de unac

class Saiyajin       // CALSES
{
  private string $nombre;  //  metodo
  private int $nivel_pelea;   //  metodo (private int)  atributo ($nivel_pelea)
  public string $clase = "Saiyajin";   //  metodo


  public function __construct($nombre, $nivel_pelea) {  // parametro ($nombre, $nivel_pelea)
    $this->nombre = $nombre;  // propiedad
    $this->nivel_pelea = $nivel_pelea;
  }

  public function Saludar($text=" Hola soy ")  {
    echo $text . $this->nombre;
  }

  public function NivelDePelea()  {
    return $this->nombre . " tiene un nivel de pelea de " . $this->nivel_pelea . " y pertenece a la clase " . $this->clase;
  }


  public function getNombre(){       // el get me permite hacer llamados a extancias cundo la clase es privada
  return $this->nombre;   //propiedad
  }


  public function setNombre($nombre){       // el get me permite hacer llamados a extancias cundo la clase es privada,  get recibe lo que es un parametro($nombre)
      $this->nombre=$nombre;   //propiedad (return $this->) retorna lo que llama el paramtro
  }

  public function getNivelPelea(){   //
    return $this->nivel_pelea;
  }

  public function setNivelPelea($nivel_pelea){   //
    $this->nivel_pelea=$nivel_pelea;
  }

}






