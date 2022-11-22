<?php

include_once "Soporte.php";

class CintaVideo extends Soporte{

  private int $duracion;

  public function __construct(string $titulo, string $numero, float $precio, int $duracion){
    parent::__construct($titulo, $numero, $precio);
    $this->duracion = $duracion;
  }

  public function muestraResumen(){
    parent::muestraResumen();
    echo 'Duración: '. $this->duracion .'<br>';
  }

}

?>