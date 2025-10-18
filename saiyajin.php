<?php

//se creo un atributo por medio de unac

       class Saiyajin{

        public string $nombre="Goku";
        public int $nivel_pelea=1000;

        public function __construct($nombre,$nivel_pelea){
        $this->nombre=$nombre;
        $this->nivel_pelea=$nivel_pelea;
            

        }

        public function Saludar($texto){
            return $texto.$this->nombre;

        }
        public function NivelDePelea(){
        return $this->nombre. " tiene un nivel de pelea de " . $this->nivel_pelea;

        }

       }
 
     
// CREAR OBJETO

