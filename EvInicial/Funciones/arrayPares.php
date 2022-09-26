<?php

function arrayPares(array $array) {
    $pares = 0;
    for($i = 0; $i < count($array); $i++){
        if($array[$i] % 2 == 0) {
            $pares++;
        }
    }
    return $pares;
}

for($i = 0; $i < 10; $i++) $arrayEjemplo[$i] = rand(0, 100);

echo arrayPares($arrayEjemplo);

?>