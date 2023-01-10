<?php

session_start();

if(isset($_SESSION['sesion'])) header('Location: main.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="login-box">
  <h2>Iniciar sesión</h2>
  <form action="login.php" method="post">
    <div class="user-box">
      <input type="text" name="username" required="">
      <label>Usuario</label>
    </div>
    <div class="user-box">
      <input type="password" name="passwd" required="" />
      <label>Contraseña</label>
    </div>
    <input type="submit" value="Iniciar sesión" />
  </form>
</div>
</body>
</html>