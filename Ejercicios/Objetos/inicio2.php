<?php

include_once 'Cliente.php';
include_once 'Soporte.php';
include_once 'CintaVideo.php';
include_once 'Dvd.php';
include_once 'Juego.php';

$cliente1 = new Cliente('Bruce Wayne', 23);
$cliente2 = new Cliente('Clark Kent', 33);

echo "El identificador del cliente 1 es: ". $cliente1->getNumero().'<br>';
echo "El identificador del cliente 2 es: ". $cliente2->getNumero().'<br>';

echo '<br>';

$soporte1 = new CintaVideo("Los Cazafantasmas", 23, 3.5, 107);
$soporte2 = new Juego("The Last OF Us Part II", 26, 49.99, "PS4", 1, 1);
$soporte3 = new Dvd("Origen", 24, 15, "es,en,fr", "16:9");
$soporte4 = new Dvd("El Imperio Contraataca", 4, 3, "es,en", "16:9");

$cliente1->alquilar($soporte1);
$cliente1->alquilar($soporte2);
$cliente1->alquilar($soporte3);

echo '<br>';

$cliente1->alquilar($soporte4);

echo '<br>';

$cliente1->devolver(24);

echo '<br>';

$cliente1->devolver(2);

echo '<br>';

$cliente1->alquilar($soporte4);

echo '<br>';

$cliente1->listarAlquileres();

echo '<br>';

$cliente2->devolver(2);

?>