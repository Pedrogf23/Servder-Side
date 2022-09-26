<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(!isset($_GET['nombre']) && !isset($_GET['apellido1'])){
        ?>
        <form action="saluda.php" method="get">
            <p><label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre"></p>
            <p><label for="apellido1">Primer apellido:</label> 
            <input type="text" name="apellido1" id="apellido1"></p>
            <p><input type="submit" value="Enviar"></p>
        </form>
        <?php
    } else {
        $nombre = $_GET['nombre'];
        $apellido1 = $_GET['apellido1'];
        echo $nombre." ".$apellido1;
    }
    ?>
</body>
</html>