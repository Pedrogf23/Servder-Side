<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de todos los grupos</title>
    <?php
    include_once('../conexion.php');
    $conn = conectar();
    ?>
</head>
<body>
    <table border=1>
        <tr>
            <th style="text-align: center;" colspan="5">Grupos</th>
        </tr>
        <tr>
            <td>Identificador</td>
            <td>Nombre</td>
            <td>Curso</td>
            <td>Alumnos</td>
            <td>Profesores</td>
        </tr>
        <?php
        $sql = "SELECT * FROM grupo";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($grupo = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>".$grupo['idGrupo']."</td>";
                echo "<td>".$grupo['nombreG']."</td>";
                echo "<td>".$grupo['curso']."</td>";
                echo
                "<td>
                    <form action='selectGrupos.php' method='post'>
                        <input type='hidden' name='idGrupo' value='".$grupo['idGrupo']."'>
                        <input type='submit'name='alumnos' value='Consultar'>
                    </form>
                </td>";
                echo
                "<td>
                    <form action='selectGrupos.php' method='post'>
                        <input type='hidden' name='idGrupo' value='".$grupo['idGrupo']."'>
                        <input type='submit' name='profesores' value='Consultar'>
                    </form>
                </td>";
                echo "</tr>";
            }
        } else {
            ?>
            <tr><td colspan="5">No hay resultados</td></tr>
            <?php
        }
        ?>
    </table>
    <?php
    if(isset($_POST['alumnos'])){
        $sql2 = "SELECT nombreG FROM grupo WHERE idGrupo = ". $_POST['idGrupo'];
        $result = $conn->query($sql2);
        $grupo = $result->fetch_assoc()
    ?>
    <table border=1>
        <tr>
            <th style="text-align: center;" colspan="7">Alumnos de <?=$grupo['nombreG']?></th>
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
        $sql = "SELECT * FROM alumno a JOIN grupo g ON g.idGrupo = a.idGrupo WHERE a.idGrupo = ". $_POST['idGrupo'];
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
                echo "</tr>";
            }
        } else {
            ?>
            <tr><td colspan="7">No hay resultados</td></tr>
            <?php
        }

        
        ?>
    </table>
    <?php
    }
    if(isset($_POST['profesores'])){
        $sql2 = "SELECT nombreG FROM grupo WHERE idGrupo = ". $_POST['idGrupo'];
        $result = $conn->query($sql2);
        $grupo = $result->fetch_assoc()
    ?>
    <table border=1>
        <tr>
            <th style="text-align: center;" colspan="6">Profesores de <?=$grupo['nombreG']?></th>
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
        $sql = "SELECT * FROM profesor p JOIN tutoria t ON p.idProfesor = t.idProfesor JOIN grupo g ON t.idGrupo = g.idGrupo WHERE t.idGrupo = ". $_POST['idGrupo'];
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
    <?php
    }
    ?>
</body>
</html>