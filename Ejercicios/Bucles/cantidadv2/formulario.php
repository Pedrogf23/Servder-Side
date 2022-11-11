<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
</head>

<body>
  <?php $cantidad = $_POST['cantidad']; ?>
  <div style="width: 50%; margin: auto; margin-top: 6%;">
    <form action="suma.php" method="post">
      <table style="width: 50%; margin: auto; text-align: center;">
        <tr>
          <th>Introduce <?php echo $cantidad; ?> números: </th>
        </tr>
        <?php
                for($i = 0; $i < $cantidad; $i++){
                    echo "<tr><td><input type='number' name='n".$i."'></td></tr>";
                }
                ?>
        <tr>
          <td><input type="submit" value="Sumar"></td>
        </tr>
      </table>
      <input type="hidden" name="cantidad" value="<?=$cantidad?>">
    </form>
  </div>
</body>

</html>