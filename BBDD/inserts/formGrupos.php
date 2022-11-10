<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Grupos</title>
    <?php include_once('insert.php'); ?>
</head>
<body>
    <div>
    <form action="formGrupos.php" method="post">
        <table border=1>
            <tr>
                <th colspan='2'>Insertar grupos</th>
            </tr>
            <tr>
                <td>Identificador</td>
                <td><input type="number" name="idGrupo"></td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td><input type="text" name="nombre"></td>
            </tr>
            <tr>
                <td>Curso</td>
                <td><input type="text" name="curso"></td>
            </tr>
            <tr>
                <td colspan='2' style="text-align: center;"><input type="submit" name="insertar" value="Guardar"></td>
            </tr>
            <?php
            if(isset($_POST['insertar'])){
                echo "<tr><td colspan='2'>".insertarGrupo($conn, $_POST['idGrupo'], $_POST['nombre'], $_POST['curso'])."</td></tr>";
            }
            cerrarConexion($conn);
            ?>
        </table>
    </form>
    </div>
</body>
</html>