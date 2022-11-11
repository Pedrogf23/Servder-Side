<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Grupos</title>
  <?php
    require_once('../../conexion.php');
    $conn = conectar();
    $sql = "SELECT * FROM grupo WHERE idGrupo = ". $_GET['id'];
    $result = $conn->query($sql);
    ?>
</head>

<body>
  <?php
    if($result->num_rows > 0){
        $grupo = $result->fetch_assoc();
        ?>
  <form action="../updateGrupo.php" method="post">
    <table border=1>
      <tr>
        <th colspan='3'>Actualizar grupo <?= $grupo['nombreG'] ?></th>
      </tr>
      <tr>
        <td>Identificador</td>
        <td><input type="text" name="idGrupo" value="<?= $grupo['idGrupo'] ?>" readonly></td>
      </tr>
      <tr>
        <td>Nombre</td>
        <td><input type="text" name="nombreG" value="<?= $grupo['nombreG'] ?>"></td>
      </tr>
      <tr>
        <td>Curso</td>
        <td><input type="text" name="curso" value="<?= $grupo['curso'] ?>"></td>
      </tr>
      <tr>
        <td colspan='2' style="text-align: center;"><input type="submit" name="actualizar" value="Guardar"></td>
      </tr>
      <?php
            cerrarConexion($conn);
            ?>
    </table>
  </form>
  <?php
    }
    ?>
</body>

</html>