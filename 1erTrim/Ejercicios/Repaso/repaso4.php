<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invertir array</title>
</head>

<body>
  <?php
    // Crea un función que que dado un array devuelva otro con los valores invertidos.

    // Funcion que invierte un array.
    function invertir(array $array){

        // Variable para recorrer en orden un array auxiliar.
        $j = 0;
        // For que recorre del revés el array introducido.
        for($i = count($array)-1; $i >= 0; $i--){
            // Se van guardando los valores del array (empezando por el último) en el array auxiliar (en orden).
            $inv[$j] = $array[$i];
            // Aumenta el índice del array auxiliar.
            $j++;
        }

        return $inv;

    }

    $array = [1,2,3,4,5,6,7,8,9];

    foreach($array as $valor){
        echo $valor." ";
    }

    echo "<br>";

    foreach(invertir($array) as $num){
        echo $num." ";
    }

    ?>
</body>

</html>