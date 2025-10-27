<?php


spl_autoload_register(function($clase){
     $nombre_archivo=str_replace('\\','/',$clase).".php";
  
    if(file_exists($nombre_archivo)) { 
        require_once $nombre_archivo;
      }

});