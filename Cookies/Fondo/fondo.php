<?php
if(!isset($_COOKIE['fondo'])){
  setcookie('fondo', 'white', time() + 86400);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body{
      background-color: <?= $_COOKIE['fondo'] ?>;
    }
  </style>
<body>
  <form action="changeBg.php" method="post">
    <select name="color" >
      <option value="white" selected>Blanco</option>
      <option value="red">Rojo</option>
      <option value="green">Verde</option>
      <option value="blue">Azul</option>
    </select>
    <input type="submit" value="Cambiar">
  </form>
</body>
</html>