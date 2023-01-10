<?php

session_start();

if(!isset($_SESSION['sesion'])) header('Location: index.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main</title>
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <h1 class="main">Has iniciado sesión correctamente</h1>
  <button class="logout"><a href="logout.php">Cerrar sesión</a></button>
</body>
</html>