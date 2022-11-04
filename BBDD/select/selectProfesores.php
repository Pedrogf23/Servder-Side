<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de todos los profesores</title>
    <?php
    include_once('../conexion.php');
    $conn = conectar();
    ?>
</head>
<body>
    <table border=1>
        <tr>
            <th style="text-align: center;" colspan="6">Profesores</th>
        </tr>
        <tr>
            <td>Identificador</td>
            <td>Nombre</td>
            <td>Apellidos</td>
            <td>Grupo</td>
            <td>Telefono</td>
            <td>Mail</td>
        </tr>
        <?php
        $sql = "SELECT * FROM profesor p JOIN tutoria t ON p.idProfesor = t.idProfesor JOIN grupo g ON t.idGrupo = g.idGrupo";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($profesor = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>".$profesor['idProfesor']."</td>";
                echo "<td>".$profesor['nombreP']."</td>";
                echo "<td>".$profesor['apellido1']." ".$profesor['apellido2']."</td>";
                echo "<td>".$profesor['nombreG']."</td>";
                echo "<td>".$profesor['telefono']."</td>";
                echo "<td>".$profesor['mail']."</td>";
                echo "</tr>";
            }
        } else {
            ?>
            <tr><td colspan="6">No hay resultados</td></tr>
            <?php
        }

        
        ?>
    </table>
</body>
</html>