<?php
session_start();
$_SESSION['fondo'] = $_POST['color'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body{
      background-color: <?= $_SESSION['fondo'] ?>;
    }
    a{
      text-decoration: none;
      color: black;
    }
  </style>
</head>
<body>
  <form action="resetFondo.php">
    <input type="submit" value="Reiniciar">
  </form>
  <br>
  <button><a href="fondo.php">Volver</a></button>
</body>
</html>