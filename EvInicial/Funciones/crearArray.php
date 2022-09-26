<?php

function arrayAleatorio(int $tam, int $min, int $max) {
    for($i = 0; $i < $tam; $i++){
        $array[$i] = rand($min, $max);
    }

    return $array;
}

$arrayEjemplo = arrayAleatorio(10, 5, 15);

for($i = 0; $i < 10; $i++){
    echo $arrayEjemplo[$i]." ";
}

?>