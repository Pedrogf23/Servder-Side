<?php

/* Includes */
include_once 'config/config.php';
include_once 'model/note.php';

if(!isset($_GET['action'])){
  $_GET['action'] = constant('DEFAULT_ACTION');
}

$controller = new NoteController();

$dataToView = array();
$dataToView = $controller->{$_GET['action']}();

/* Include views */

?>