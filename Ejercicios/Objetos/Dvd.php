<?php

declare(strict_types=1);

include_once "Soporte.php";

class Dvd extends Soporte{

  public string $idiomas;
  private string $formatPantalla;

  public function __construct(string $titulo, string $numero, float $precio, string $idiomas, string $formatPantalla){
    parent::__construct($titulo, $numero, $precio);
    $this->idiomas = $idiomas;
    $this->formatPantalla = $formatPantalla;
  }

  public function muestraResumen(){
    parent::muestraResumen();
    echo 'Idiomas: '. $this->idiomas .'<br>Formato de pantalla: '. $this->formatPantalla .'<br>';
  }

}

?>