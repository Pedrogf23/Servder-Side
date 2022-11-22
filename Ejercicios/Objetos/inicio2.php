<?php

include_once 'Cliente.php';
include_once 'Soporte.php';
include_once 'CintaVideo.php';
include_once 'Dvd.php';
include_once 'Juego.php';

$cliente1 = new Cliente('Pedro', 1);

$soporte1 = new Soporte("Tenet", 1, 3);
$miCinta = new CintaVideo("Los cazafantasmas", 2, 3.5, 107);
$miDvd = new Dvd('Origen', 3, 15, "es,en,fr", "16:9");
$miJuego = new Juego('The Last Of Us Part II', 4, 49.99, "PS4", 1, 1);

$cliente1->alquilar($miCinta);
$cliente1->alquilar($miDvd);
$cliente1->alquilar($miJuego);

echo '<br>';



$cliente1->devolver(5);

echo '<br>';



?>