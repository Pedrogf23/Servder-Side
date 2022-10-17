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

    // function ordenarMayorMenor(...$nums){
    //     if(count($nums) == 0){
    //         return false;
    //     } else {
    //         $ordenados[0] = $nums[0];
    //         for($i = 1; $i < count($nums); $i++){
    //             for($j = 0; $j < $i; $j++){
    //                 if($nums[$i] > $ordenados[$j]){
    //                     for($k = count($ordenados); $k >= $j; $k--){
    //                         if($k != 0){
    //                             $ordenados[$k] = $ordenados[$k-1];
    //                         }
    //                     }
    //                 }
    //             }
    //         }
    //         return $ordenados;
    //     }
    // }

    $array = [1, 2, 3, 4, 5, 7, 6];

    function reestructurar(&$array, $pos){
        for($i = count($array); $i >= count($array) - $pos; $i--){
            $array[$i] = $array[$i-1];
        }
    }

    reestructurar($array, 2);

    foreach($array as $num){
        echo $num;
    }

    

    // $array = ordenarMayorMenor(1,2,3,4,5,7,6);

    // foreach($array as $num){
    //     echo $num." ";
    // }

    ?>
</body>
</html>