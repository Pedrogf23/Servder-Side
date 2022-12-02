<?php

/* Includes */
include_once 'config/config.php';
include_once 'model/note.php';
include_once 'controller/note.php';

if(!isset($_GET['action'])) $_GET['action'] = constant("DEFAULT_ACTION");

//$controlador = noteController();

$dataToView = array();
$dataToView = $controlador->{$_GET["action"]}();

/* Includes */
include_once 'view/templates/header.php';
include_once 'view/'. $controlador->view .'.php';
include_once 'view/templates/footer.php';

?>