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
    <form action="formTutoria.php" method="post">
        <table border=1>
            <tr>
                <th colspan='2'>Insertar Tutoría</th>
            </tr>
            <tr>
                <td>Grupo</td>
                <td>
                    <select name="idGrupo">
                    <option value="" selected disabled hidden>-- Selecciona un grupo --</option>
                    <?php
                        $sql = "SELECT * FROM grupo";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0){
                            while($grupo = $result->fetch_assoc()){
                                echo "<option value='".$grupo['idGrupo']."'>".$grupo['nombreG']."</option>";
                            }
                        }
                    ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Profesor</td>
                <td>
                    <select name="idProfesor">
                    <option value="" selected disabled hidden>-- Selecciona un profesor --</option>
                    <?php
                        $sql = "SELECT idProfesor, nombreP, apellido1, apellido2 FROM profesor";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0){
                            while($profesor = $result->fetch_assoc()){
                                echo "<option value='".$profesor['idProfesor']."'>".$profesor['nombreP']." ".$profesor['apellido1']." ".$profesor['apellido2']."</option>";
                            }
                        }
                    ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan='2' style="text-align: center;"><input type="submit" name="insertar" value="Guardar"></td>
            </tr>
            <?php
            if(isset($_POST['insertar'])){
                echo "<tr><td colspan='2'>".insertarTutor($conn, $_POST['idProfesor'], $_POST['idGrupo'])."</td></tr>";
            }
            cerrarConexion($conn);
            ?>
        </table>
    </form>
    </div>
</body>
</html>