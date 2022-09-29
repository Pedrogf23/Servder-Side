<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz de numeros aleatorios</title>
</head>
<body>
    <?php
    const FILAS = 6;
    const COLUMNAS = 9;
    for($i = 0; $i < FILAS; $i++){
        for($j = 0; $j < COLUMNAS; $j++){
            $num[$i][$j] = rand(100, 999);
        }
    }

    echo "<table border=1>";
    for($i = 0; $i < FILAS; $i++){
        echo "<tr>";
        for($j = 0; $j < COLUMNAS; $j++){
            echo "<td>". $num[$i][$j] ."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>