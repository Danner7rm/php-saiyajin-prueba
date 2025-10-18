<?php

//se creo un atributo por medio de unac

       class Saiyajin{

        
  

        public function __construct(public string $nombre,public int $nivel_pelea){               

        }

        public function Saludar($texto){
            return $texto.$this->nombre;

        }
        public function NivelDePelea(){
        return $this->nombre. " tiene un nivel de pelea de " . $this->nivel_pelea;

        }

       }
 
     
// CREAR OBJETO

