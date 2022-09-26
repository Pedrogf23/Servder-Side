<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
</head>
<body>
    <?php
    if((isset($_POST['filas'])) && (isset($_POST['columnas'])) && ($_POST['filas'] > 0) && ($_POST['columnas'] > 0)){
        $filas = $_POST['filas'];
        $columnas = $_POST['columnas'];
        echo "<table border='1'>";
        for($i = 0; $i < $filas; $i++){
            echo "<tr>";
            for($j = 0; $j < $columnas; $j++){
                echo "<td>", $i ," - ", $j ,"</td>";       
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        ?>
        <form action="tabla.php" method="post">
            <p>Inserta las filas:</p>
            <input type="number" name="filas">
            <p>Inserta las columnas:</p>
            <input type="number" name="columnas"><br>
            <input type="submit" value="Crear tabla">
        </form>
        <?php
    }
    ?> 
</body>
</html>