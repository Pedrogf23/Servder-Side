<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Alumno</title>
  <?php include_once('insert.php'); ?>
</head>

<body>
  <div>
    <form action="formAlumnos.php" method="post">
      <table border=1>
        <tr>
          <th colspan='2'>Insertar alumnos</th>
        </tr>
        <tr>
          <td>Identificador</td>
          <td><input type="number" name="idAlumno"></td>
        </tr>
        <tr>
          <td>Grupo</td>
          <td>
            <select name="idGrupo">
              <option value="" selected disabled hidden>-- Selecciona un grupo --</option>
              <?php
                $sql = "SELECT * FROM grupo";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  while ($grupo = $result->fetch_assoc()) {
                    echo "<option value='" . $grupo['idGrupo'] . "'>" . $grupo['nombreG'] . "</option>";
                  }
                }
              ?>
            </select>
          </td>
        </tr>
        <tr>
          <td>Nombre</td>
          <td><input type="text" name="nombre"></td>
        </tr>
        <tr>
          <td>Primer apellido</td>
          <td><input type="text" name="apellido1"></td>
        </tr>
        <tr>
          <td>Segundo apellido</td>
          <td><input type="text" name="apellido2"></td>
        </tr>
        <tr>
          <td>Expediente</td>
          <td><input type="number" name="expediente"></td>
        </tr>
        <tr>
          <td>Número de teléfono</td>
          <td><input type="text" name="telefono"></td>
        </tr>
        <tr>
          <td>Correo electrónico</td>
          <td><input type="text" name="mail"></td>
        </tr>
        <tr>
          <td colspan='2' style="text-align: center;"><input type="submit" name="insertar" value="Guardar"></td>
        </tr>
        <?php
          if (isset($_POST['insertar'])) {
            echo "<tr><td colspan='2'>" . insertarAlumno($conn, $_POST['idAlumno'], $_POST['idGrupo'], $_POST['nombre'], $_POST['apellido1'], $_POST['apellido2'], $_POST['expediente'], $_POST['telefono'], $_POST['mail']) . "</td></tr>";
          }
          cerrarConexion($conn);
        ?>
      </table>
    </form>
  </div>
</body>

</html>