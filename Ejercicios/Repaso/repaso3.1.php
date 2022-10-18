<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenar números</title>
</head>
<body>
    <?php
    /* Realiza una función que que recibe por argumento una serie de valores
    y devuelve un array con los valores ordenados de mayor a menor. */

    // Funcion para ordenar los números.
    function ordenarMayorMenor(...$nums){
        // Si no hay parametros introducidos.
        if(count($nums) == 0){
            // Devuelve false.
            return false;
        } else {

            // Bucle que recorre el array desde el primer valor hasta el penúltimo.
            for($i = 0; $i < count($nums)-1; $i++){
                // Bucle que vuelve a recorrer el array desde el siguiente a $i hasta el último.
                for($j = $i+1; $j < count($nums); $j++){
                    // Si el numero guardado en j es mayor que el número guardado en i.
                    if($nums[$j] > $nums[$i]){
                        // Se intercambian.
                        $aux = $nums[$j];
                        $nums[$j] = $nums[$i];
                        $nums[$i] = $aux;
                    }
                }
            }

            return $nums;

        }
    }

    foreach(ordenarMayorMenor(1,2,3,4,5,7,6) as $num){
        echo $num." ";
    }

    ?>
</body>
</html>