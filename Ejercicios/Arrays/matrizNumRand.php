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
    for($i = 0; $i < FILAS*COLUMNAS; $i++){
        $num[$i] = rand(100, 999);
        for($j = 0; $j < $i; $j++){
            while($num[$i] == $num[$j]) {
                $num[$i] = rand(100, 999);
                $j = 0;
            }
        }
    }

    $k = 0;
    for($i = 0; $i < FILAS; $i++){
        for($j = 0; $j < COLUMNAS; $j++){
            $numBi[$i][$j] = $num[$k];
            $k++;
        }
    }

    $mayor = $numBi[0][0];
    $menor = $numBi[0][0];
    for($i = 0; $i < FILAS; $i++){
        for($j = 0; $j < COLUMNAS; $j++){
            if($numBi[$i][$j] < $menor){
                $menor = $numBi[$i][$j];
            } else if ($numBi[$i][$j] > $mayor){
                $mayor = $numBi[$i][$j];
            }
        }
    }

    echo "<table border=1>";
    for($i = 0; $i < FILAS; $i++){
        echo "<tr>";
        for($j = 0; $j < COLUMNAS; $j++){
            if($numBi[$i][$j] == $mayor){
                echo "<td style='background-color: green;'>". $numBi[$i][$j] ."</td>";
            } else if($numBi[$i][$j] == $menor){
                echo "<td style='background-color: blue;'>". $numBi[$i][$j] ."</td>";
            } else {
                echo "<td style='background-color: black; color: white;'>". $numBi[$i][$j] ."</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>