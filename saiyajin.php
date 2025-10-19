<?php

//se creo un atributo por medio de unac

       class Saiyajin{

        public string $clase="Saiyajin";

        
          public function __construct(public string $nombre,public int $nivel_pelea){               

        }

        public function Saludar($texto){
            return $texto.$this->nombre;

        }
        public function NivelDePelea(){
        return $this->nombre. " tiene un nivel de pelea de " . $this->nivel_pelea." y pertenece a la clase".$this->clase;

        }

       }
 
     
class Supersaiyajin extends Saiyajin{

    public string $clase="Super Saiyajin";

    public function transformacion(){

  if($this->nivel_pelea>=1500){
    $texto=$this->nombre." se transformo en ".$this->clase;
  }else{
    $texto=$this->nombre." No se transformo en ".$this->clase;
    
  }

  return $texto;



    }
}

     $goku = new Saiyajin(nivel_pelea:1000,nombre:"goku");
echo $goku->NivelDePelea("Hola soy");



echo "<br><br>";

$vegeta = new Saiyajin(nivel_pelea:950,nombre:"Vegeta");
echo $vegeta->NivelDePelea("Mi nombre es");


echo "<br><br>";

$gohan = new Supersaiyajin(nivel_pelea:1700,nombre:"gohan");

echo $gohan->NivelDePelea();


echo "<br><br>";

echo $gohan->transformacion();




