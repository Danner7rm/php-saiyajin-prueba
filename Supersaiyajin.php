<?php

class SuperSaiyajin extends Saiyajin    //CALSE EREDADA POR ISTANCIA 
{

    public string $clase = "SuperSaiyajin";       //METODO
    public static $cabello = "amarillo";

    public function transformacion(){   //METODO

        if ($this->getNivelPelea() >= 1500) {      
            $texto = $this->getNombre() . " se transformo en " . $this->clase;      // ATRIBUTO
        } else {
            $texto = $this->getNombre() . " No se transformo en " . $this->clase;  // ATRIBUTO
        }
        return $texto;
    }
 public static function MostrarColorCabello() {
    // Retorna (devuelve) el texto, no lo imprime directamente
    return "Tengo el cabello de color ".self::$cabello;
  }
   
  public static function NuevoMetodo(){
    return  parent::MostrarColorCabello();                            //parent:: me permite acceder a una constante o aun metodo statio del padre que es saiyajin
  }
}
