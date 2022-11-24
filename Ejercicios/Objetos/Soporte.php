<?php

declare(strict_types=1);

class Soporte{
  public string $titulo;
  protected int $numero;
  private float $precio;
  private const IVA = 21;
  private static int $totalSoportes = 0;
  private bool $alquilado = false;

  public function __construct(string $titulo, float $precio){
    $this->titulo = $titulo;
    $this->precio = $precio;
    $this->numero = self::$totalSoportes;
    self::$totalSoportes++;
  }


  public function isAlquilado(){
    return $this->alquilado;
  }

  public function setAlquilado(bool $b){
    $this->alquilado = $b;
  }

  public function getPrecio(){
    return $this->precio;
  }

  public function getPrecioConIva(){
    return $this->precio + ($this->precio * (self::IVA / 100));
  }

  public function getNumero(){
    return $this->numero;
  }

  public function muestraResumen(){
    echo 'Titulo: '.$this->titulo .'</br>Precio: '. $this->precio . '€ (IVA no incluido)</br>';
  }

}

?>