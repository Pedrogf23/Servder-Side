<?php

/* Includes */
include_once 'config/config.php'; 
include_once 'model/note.php'; 
include_once 'controller/note.php';

// Si no hay definida una acción, se pone la por defecto, definida en config.php.
if(!isset($_GET['action'])) $_GET['action'] = constant("DEFAULT_ACTION");

// Crea un objeto noteController, para controlar las
// acciones que se quieran tomar en cada momento.
$controller = new noteController();

// Se crea un array que va a almacenar los datos necesarios para acción.
$dataToView = array();
$dataToView = $controller->{$_GET["action"]}(); // Llamada a las funciones del controlador, a través de la variable get action.

/* Includes */
include_once 'view/templates/header.php';
include_once 'view/'.$controller->view.'.php'; // Incluye la vita concreta, necesaria en cada momento, dependiendo del atrubuto view del objeto noteController.
include_once 'view/templates/footer.php';

?>