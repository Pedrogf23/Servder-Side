<?php

include_once 'VideoClub.php';

$vc = new VideoClub("Severo 8A");

$vc->incluirJuego('God of War', 19.99, 'PS4', 1, 1);
$vc->incluirJuego('The Last Of Us Part II', 49.99, 'PS4', 1, 1);
$vc->incluirDvd('Torrente', 4.5, 'es', '16:9');
$vc->incluirDvd('Origen', 4.5, 'es,en,fr', '16:9');
$vc->incluirDvd('El Imperio Contraataca', 3, 'es,en', '16:9');
$vc->incluirCinta('Los Cazafantasmas', 3.5, 107);
$vc->incluirCinta('El nombre de la Rosa', 1.5, 140);

$vc->listarProductos();

$vc->incluirSocio('Amancio Ortega');
$vc->incluirSocio('Pablo Picasso', 2);

$vc->alquilarSocioProducto(1, 2);
$vc->alquilarSocioProducto(1, 3);

echo '<br>';

$vc->alquilarSocioProducto(1, 2);

echo '<br>';

$vc->alquilarSocioProducto(1, 6);

echo '<br>';

$vc->listarSocios();

?>