<?php

class Supersaiyajin extends Saiyajin
{

    public string $clase = "SuperSaiyajin";

    public function transformacion()
    {

        if ($this->nivel_pelea >= 1500) {
            $texto = $this->nombre . " se transformo en " . $this->clase;
        } else {
            $texto = $this->nombre . " No se transformo en " . $this->clase;
        }
        return $texto;
    }

   
}
