<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Profesores</title>
    <style>
        div{
            margin: auto;
            width: 17.3%;
        }
    </style>
    <?php include_once('insert.php'); ?>
</head>
<body>
    <div>
    <form action="formProfesores.php" method="post">
        <table>
            <tr>
                <th colspan='2'>Insertar Profesores</th>
            </tr>
            <tr>
                <td>Identificador</td>
                <td><input type="number" name="idProfesor"></td>
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
            if(isset($_POST['insertar'])){
                echo "<tr><td colspan='2'>".insertarProfesor($conn, $_POST['idProfesor'], $_POST['nombre'], $_POST['apellido1'], $_POST['apellido2'], $_POST['telefono'], $_POST['mail'])."</td></tr>";
            }
            cerrarConexion($conn);
            ?>
        </table>
    </form>
    </div>
</body>
</html>