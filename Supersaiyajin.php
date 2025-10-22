<?php

class Supersaiyajin extends Saiyajin    //CALSE EREDADA POR ISTANCIA 
{

    public string $clase = "SuperSaiyajin";       //METODO

    public function transformacion(){   //METODO

        if ($this->getNivelPelea() >= 1500) {      
            $texto = $this->getNombre() . " se transformo en " . $this->clase;      // ATRIBUTO
        } else {
            $texto = $this->getNombre() . " No se transformo en " . $this->clase;  // ATRIBUTO
        }
        return $texto;
    }

   
}
