<?php

declare(strict_types=1);

include_once 'Soporte.php';

class Juego extends Soporte{

  public string $consola;
  private int $minNumJugadores;
  private int $maxNumJugadores;

  public function __construct(string $titulo, float $precio, string $consola, int $minNumJugadores, int $maxNumJugadores){
    parent::__construct($titulo, $precio);
    $this->consola = $consola;
    $this->minNumJugadores = $minNumJugadores;
    $this->maxNumJugadores = $maxNumJugadores;
  }

  public function muestraJugadoresPosibles(){
    if($this->maxNumJugadores = 1){
      return 'Para un jugador';
    } else if($this->maxNumJugadores = $this->minNumJugadores){
      return 'Para '.$this->minNumJugadores.' jugadores';
    } else if($this->minNumJugadores = 1 && $this->maxNumJugadores != 1){
      return 'De '.$this->minNumJugadores.' a '.$this->maxNumJugadores.' jugadores';
    }
  }

  public function muestraResumen(){
    parent::muestraResumen();
    echo 'Consola: '. $this->consola .'<br>Mínimo de jugadores: '. $this->minNumJugadores .'<br>Máximo de jugadores: '. $this->maxNumJugadores .'<br>'. $this->muestraJugadoresPosibles().'<br>';
  }

}

?>