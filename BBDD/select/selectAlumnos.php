<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de todos los alumnos</title>
    <?php
    include_once('../conexion.php');
    $conn = conectar();
    ?>
</head>
<body>
    <table border=1>
        <tr>
            <th style="text-align: center;" colspan="8">Alumnos</th>
        </tr>
        <tr>
            <td>Identificador</td>
            <td>Grupo</td>
            <td>Nombre</td>
            <td>Apellidos</td>
            <td>Expediente</td>
            <td>Telefono</td>
            <td>Mail</td>
        </tr>
        <?php
        $sql = "SELECT * FROM alumno a JOIN grupo g ON g.idGrupo = a.idGrupo";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($alumno = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>".$alumno['idAlumno']."</td>";
                echo "<td>".$alumno['nombreG']."</td>";
                echo "<td>".$alumno['nombreA']."</td>";
                echo "<td>".$alumno['apellido1']." ".$alumno['apellido2']."</td>";
                echo "<td>".$alumno['expediente']."</td>";
                echo "<td>".$alumno['telefono']."</td>";
                echo "<td>".$alumno['mail']."</td>";
                echo "<td><button onclick='confirmDelete(".$alumno['idAlumno'].")'>Eliminar</button></td>";
                echo "</tr>";
            }
        } else {
            ?>
            <tr><td colspan="8">No hay resultados</td></tr>
            <?php
        }
        cerrarConexion($conn);
        ?>
    </table>
    <script>
    function confirmDelete(id) {
        let confirmar = confirm('¿Seguro que quiere eliminar ese alumno?');
        if (confirmar == true) {
            location.href = `../delete.php?id=${id}&tabla=alumno`;
        }
        }
    </script>
</body>
</html>