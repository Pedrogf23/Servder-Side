<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listado de todos los profesores</title>
  <script src="../js/funciones.js"></script>
  <?php
    include_once('../conexion.php');
    $conn = conectar();
    ?>
</head>

<body>
  <table border=1>
    <tr>
      <th style="text-align: center;" colspan="7">Profesores</th>
    </tr>
    <tr style="text-align: center;">
      <td>Identificador</td>
      <td>Nombre</td>
      <td>Apellidos</td>
      <td>Telefono</td>
      <td>Mail</td>
      <td>Editar</td>
      <td>Eliminar</td>
    </tr>
    <?php
        $sql = "SELECT * FROM profesor";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($profesor = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>".$profesor['idProfesor']."</td>";
                echo "<td>".$profesor['nombreP']."</td>";
                echo "<td>".$profesor['apellido1']." ".$profesor['apellido2']."</td>";
                echo "<td>".$profesor['telefono']."</td>";
                echo "<td>".$profesor['mail']."</td>";
                echo "<td><button onclick='update(".$profesor['idProfesor'].", `profesor`)'>Editar</button></td>";
                echo "<td><button onclick='confirmDelete(".$profesor['idProfesor'].", `profesor`)'>Eliminar</button></td>";
                echo "</tr>";
            }
        } else {
            ?>
    <tr>
      <td colspan="6">No hay resultados</td>
    </tr>
    <?php
        }
        cerrarConexion($conn);        
        ?>
  </table>
</body>

</html>