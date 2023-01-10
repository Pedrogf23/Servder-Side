<?php

session_start();

if(isset($_SESSION['sesion'])) header('Location: main.php');

if($_POST['username'] == "admin" && $_POST['passwd'] == "admin"){
  $_SESSION['sesion'] = true;
}

header('Location: index.php')

?>