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

    $mayor = $num[0];
    $menor = $num[0];
    $columnaMayor = 0;
    $filaMenor = 0;
    $k = 0;
    for($i = 0; $i < FILAS; $i++){
        for($j = 0; $j < COLUMNAS; $j++){
            $numBi[$i][$j] = $num[$k];
            if($numBi[$i][$j] < $menor){
                $menor = $numBi[$i][$j];
                $filaMenor = $i;
            } else if ($numBi[$i][$j] > $mayor){
                $mayor = $numBi[$i][$j];
                $columnaMayor = $j;
            }
            $k++;
        }
    }

    echo "<table border=1>";
    for($i = 0; $i < FILAS; $i++){
        echo "<tr>";
        for($j = 0; $j < COLUMNAS; $j++){
            if($i == $filaMenor && $j == $columnaMayor){
                echo "<td style='background-color: aquamarine;'>". $numBi[$i][$j] ."</td>";
            }else if($j == $columnaMayor){
                echo "<td style='background-color: green;'>". $numBi[$i][$j] ."</td>";
            } else if($i == $filaMenor){
                echo "<td style='background-color: blue;'>". $numBi[$i][$j] ."</td>";
            } else {
                echo "<td>". $numBi[$i][$j] ."</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>