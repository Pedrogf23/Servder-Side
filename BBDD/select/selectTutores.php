<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de todos los tutores</title>
    <?php
    include_once('../conexion.php');
    $conn = conectar();
    ?>
</head>
<body>
    <table border=1>
        <tr>
            <th style="text-align: center;" colspan="3">Tutorías</th>
        </tr>
        <tr>
            <th>Profesor</th>
            <th>Grupo</th>
        </tr>
        <?php
        $sql = "SELECT * FROM profesor p JOIN tutoria t ON p.idProfesor = t.idProfesor JOIN grupo g ON t.idGrupo = g.idGrupo";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($tutores = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>".$tutores['nombreP']." ".$tutores['apellido1']." ".$tutores['apellido2']."</td>";
                echo "<td>".$tutores['nombreG']."</td>";
                echo "<td><button onclick='confirmDeleteT(".$tutores['idProfesor'].", ".$tutores['idGrupo'].")'>Eliminar</button></td>";
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
    function confirmDeleteT(profesor, grupo) {
        let confirmar = confirm('¿Seguro que quiere eliminar esa tutoría?');
        if (confirmar == true) {
            location.href = `../delete.php?profesor=${profesor}&grupo=${grupo}`;
        }
        }
    </script>
</body>
</html>