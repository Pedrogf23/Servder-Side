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
    $sql = "SELECT * FROM profesor WHERE idProfesor = ". $_GET['id'];
    $result = $conn->query($sql);
    ?>
</head>
<body>
    <?php
    if($result->num_rows > 0){
        $profesor = $result->fetch_assoc();
        ?>
        <form action="../updateProfesor.php" method="post">
        <table border=1>
            <tr>
                <th colspan='2'>Actualizar alumno <?= $profesor['nombreP'] ?> <?= $profesor['apellido1'] ?></th>
            </tr>
            <tr>
                <td>Identificador</td>
                <td><input type="text" name="idProfesor" value="<?= $profesor['idProfesor'] ?>" readonly></td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td><input type="text" name="nombreP" value="<?= $profesor['nombreP'] ?>"></td>
            </tr>
            <tr>
                <td>Primer apellido</td>
                <td><input type="text" name="apellido1" value="<?= $profesor['apellido1'] ?>"></td>
            </tr>
            <tr>
                <td>Segundo apellido</td>
                <td><input type="text" name="apellido2" value="<?= $profesor['apellido2'] ?>"></td>
            </tr>
            <tr>
                <td>Número de teléfono</td>
                <td><input type="text" name="telefono" value="<?= $profesor['telefono'] ?>"></td>
            </tr>
            <tr>
                <td>Correo electrónico</td>
                <td><input type="text" name="mail" value="<?= $profesor['mail'] ?>"></td>
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