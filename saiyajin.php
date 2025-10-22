<?php

// 🔹 Definición de la CLASE (molde o plantilla para crear objetos)
class Saiyajin
{
  // 🔸 ATRIBUTOS o PROPIEDADES → definen las características del objeto

  private string $nombre;        // Atributo privado: almacena el nombre del Saiyajin
  private int $nivel_pelea;      // Atributo privado: guarda su nivel de pelea
  public string $clase = "Saiyajin";  // Atributo público: clase a la que pertenece
  public static $cabello = "negro";   // Atributo estático: propiedad compartida por todos los Saiyajin

  // 🔹 CONSTRUCTOR → método especial que se ejecuta al crear un objeto
  // ($nombre, $nivel_pelea) → son PARÁMETROS que reciben valores al instanciar el objeto
  public function __construct($nombre, $nivel_pelea) {
    $this->nombre = $nombre;          // $this->nombre → atributo del objeto, se le asigna el valor del parámetro $nombre
    $this->nivel_pelea = $nivel_pelea; // $this->nivel_pelea → atributo del objeto, se le asigna el valor del parámetro $nivel_pelea
  }

  // Se define un método estático dentro de una clase
  public static function MostrarColorCabello() {
    // Retorna (devuelve) el texto, no lo imprime directamente
    return "Tengo el cabello de color ".self::$cabello;
  }
  // 🔹 MÉTODO NORMAL → define una acción que puede ejecutar el objeto
  // ($text) → PARÁMETRO que recibe un texto opcional (valor por defecto "Hola, soy ")
  public function Saludar($text = "Hola, soy ")  {
    // echo → imprime el mensaje concatenando el texto recibido con el atributo $nombre del objeto
    echo $text . $this->nombre;
  }

  // 🔹 MÉTODO NORMAL → devuelve un texto con el nivel de pelea del Saiyajin
  public function NivelDePelea()  {
    // Usa los atributos del objeto ($this->nombre, $this->nivel_pelea, $this->clase)
    // para formar una frase con su información
    return $this->nombre . " tiene un nivel de pelea de " . 
           $this->nivel_pelea . " y pertenece a la clase " . $this->clase;
  }

  // 🔹 MÉTODO GET → permite acceder al valor de un atributo privado ($nombre)
  public function getNombre() {
    // Retorna el valor del atributo privado $nombre
    return $this->nombre;
  }

  // 🔹 MÉTODO SET → permite modificar el valor de un atributo privado ($nombre)
  // ($nombre) → PARÁMETRO que recibe un nuevo nombre
  public function setNombre($nombre) {
    // Asigna el valor recibido por el parámetro al atributo del objeto
    $this->nombre = $nombre;
  }

  // 🔹 MÉTODO GET → permite acceder al atributo privado $nivel_pelea
  public function getNivelPelea() {
    // Retorna el valor actual del atributo $nivel_pelea
    return $this->nivel_pelea;
  }

  // 🔹 MÉTODO SET → permite modificar el atributo privado $nivel_pelea
  // ($nivel_pelea) → PARÁMETRO que recibe un nuevo valor
  public function setNivelPelea($nivel_pelea) {
    // Asigna el valor del parámetro al atributo $nivel_pelea
    $this->nivel_pelea = $nivel_pelea;
  }
}









