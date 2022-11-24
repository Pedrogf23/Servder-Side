<?php

include_once 'Soporte.php';
include_once 'CintaVideo.php';
include_once 'Dvd.php';
include_once 'Juego.php';

$soporte1 = new Soporte("Tenet", 3);
echo "<strong>". $soporte1->titulo ."</strong>";
echo "<br>Precio: ". $soporte1->getPrecio() ." euros";
echo "<br>Precio con IVA: ". $soporte1->getPrecioConIva() ." euros<br>";
$soporte1->muestraResumen();

echo '<br>';

$miCinta = new CintaVideo("Los cazafantasmas", 3.5, 107);
echo "<strong>". $miCinta->titulo ."</strong>";
echo "<br>Precio: ". $miCinta->getPrecio() ." euros";
echo "<br>Precio con IVA: ". $miCinta->getPrecioConIva() ." euros<br>";
$miCinta->muestraResumen();

echo '<br>';

$miDvd = new Dvd('Origen', 15, "es,en,fr", "16:9");
echo "<strong>". $miDvd->titulo ."</strong>";
echo "<br>Precio: ". $miDvd->getPrecio() ." euros";
echo "<br>Precio con IVA: ". $miDvd->getPrecioConIva() ." euros<br>";
$miDvd->muestraResumen();

echo '<br>';

$miJuego = new Juego('The Last Of Us Part II', 49.99, "PS4", 1, 1);
echo "<strong>". $miJuego->titulo ."</strong>";
echo "<br>Precio: ". $miJuego->getPrecio() ." euros";
echo "<br>Precio con IVA: ". $miJuego->getPrecioConIva() ." euros<br>";
$miJuego->muestraResumen();

?>