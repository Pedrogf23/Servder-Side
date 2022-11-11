<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cantidad</title>
  <?php require_once('funciones.php'); ?>
</head>

<body>
  <?php
if(isset($_POST['enviar1'])){
    crearFormulario($_POST['cantidad']);
} else if (isset($_POST['enviar2'])) {
    sumar($_POST['cantidad']);
} else {
?>
  <div style="width: 50%; margin: auto; margin-top: 6%;">
    <form action="cantidad.php" method="post">
      <table style="width: 50%; margin: auto; text-align: center;">
        <tr>
          <th>Introduce una cantidad: </th>
        </tr>
        <tr>
          <td><input type="number" name="cantidad" placeholder="Cantidad..."></td>
        </tr>
        <tr>
          <td><input type="submit" value="Enviar" name="enviar1"></td>
        </tr>
      </table>
    </form>
  </div>
  <?php
}
?>
</body>

</html>