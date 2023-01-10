<?php

declare(strict_types = 1);

function sumar(...$nums): int {

    $suma = 0;

    for($i = 0; $i < count($nums); $i++){
        $suma += $nums[$i];
    }

    return $suma;

}

function multiplicar(...$nums): int {

    $multiplicacion = $nums[0];

    for($i = 1; $i < count($nums); $i++){
        $multiplicacion *= $nums[$i];
    }

    return $multiplicacion;

}

function restar(...$nums): int {

    $resta = $nums[0];

    for($i = 1; $i < count($nums); $i++){
        $resta -= $nums[$i];
    }

    return $resta;

}

function dividir(...$nums): int {

    $division = $nums[0];

    for($i = 1; $i < count($nums); $i++){
        $division /= $nums[$i];
    }

    return $division;

}

?>