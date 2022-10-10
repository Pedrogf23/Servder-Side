<?php

declare(strict_types = 1);

function sumar(int $num1, int $num2): int {

    return intval($num1 + $num2);

}

function multiplicar(int $num1, int $num2): int {

    return intval($num1 * $num2);

}

function restar(int $num1, int $num2): int {

    if($num1 >= $num2){
        return intval($num1 - $num2);
    } else {
        return intval($num2 - $num1);
    }

}

function dividir(int $num1, int $num2): int {

    if($num1 >= $num2){
        return intval($num1 / $num2);
    } else {
        return intval($num2 / $num1);
    }

}

$num1 = 10;
$num2 = 15;

?>