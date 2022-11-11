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
    $sql = "SELECT * FROM alumno WHERE idAlumno = ". $_GET['id'];
    $result = $conn->query($sql);
    ?>
</head>

<body>
  <?php
    if($result->num_rows > 0){
        $alumno = $result->fetch_assoc();
        ?>
  <form action="../updateAlumno.php" method="post">
    <table border=1>
      <tr>
        <th colspan='2'>Actualizar alumno <?= $alumno['nombreA'] ?> <?= $alumno['apellido1'] ?></th>
      </tr>
      <tr>
        <td>Identificador</td>
        <td><input type="text" name="idAlumno" value="<?= $alumno['idAlumno']; ?>" readonly></td>
      </tr>
      <tr>
        <td>Grupo</td>
        <td>
          <select name="idGrupo">
            <?php
                        $sql = "SELECT * FROM grupo";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0){
                            while($grupo = $result->fetch_assoc()){
                                if($grupo['idGrupo'] == $alumno['idGrupo']){                                   
                                    echo "<option value='".$grupo['idGrupo']."' selected>".$grupo['nombreG']."</option>";
                                } else {
                                    echo "<option value='".$grupo['idGrupo']."'>".$grupo['nombreG']."</option>";
                                }
                            }
                        }
                    ?>
          </select>
        </td>
      </tr>
      <tr>
        <td>Nombre</td>
        <td><input type="text" name="nombreA" value="<?= $alumno['nombreA']; ?>"></td>
      </tr>
      <tr>
        <td>Primer apellido</td>
        <td><input type="text" name="apellido1" value="<?= $alumno['apellido1']; ?>"></td>
      </tr>
      <tr>
        <td>Segundo apellido</td>
        <td><input type="text" name="apellido2" value="<?= $alumno['apellido2']; ?>"></td>
      </tr>
      <tr>
        <td>Expediente</td>
        <td><input type="number" name="expediente" value="<?= $alumno['expediente']; ?>"></td>
      </tr>
      <tr>
        <td>Número de teléfono</td>
        <td><input type="text" name="telefono" value="<?= $alumno['telefono']; ?>"></td>
      </tr>
      <tr>
        <td>Correo electrónico</td>
        <td><input type="text" name="mail" value="<?= $alumno['mail']; ?>"></td>
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