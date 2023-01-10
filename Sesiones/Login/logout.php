<?php

session_start();

if(!isset($_SESSION['sesion'])) header('Location: index.php');

session_destroy();

header('Location: index.php')

?>