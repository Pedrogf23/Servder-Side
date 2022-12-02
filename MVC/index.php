<?php

/* Includes */
include_once 'config/config.php';
include_once 'model/note.php';
include_once 'controller/note.php';



/* Includes */
include_once 'view/templates/header.php';
include_once 'view/'. $controlador->{$_GET["action"]}() .'.php';
include_once 'view/templates/footer.php';

?>