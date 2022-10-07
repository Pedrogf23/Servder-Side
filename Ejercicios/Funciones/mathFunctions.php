<?php

declare(strict_types = 1);

function digitos(int $num): int {

    $contador = 0;
    while($num >= 1){
        $num /= 10;
        $contador++;
    }
    return $contador;

}

echo digitos(12345);
echo "<br>";

function digitoN(int $num, int $pos): int {

    $volteado = 0;
    while($num >= 1){
        $volteado = $volteado * 10 + ($num % 10);
        $num /= 10;
    }

    for($i = 0; $i < $pos; $i++){
        $volteado = $volteado / 10;
    }

    return $volteado % 10;

}

echo digitoN(12345, 3);
echo "<br>";

function quitaPorDetras(int $num, int $cant): int{

    for($i = 0; $i < $cant; $i++){
        $num /= 10;
    }

    return intval($num);

}

echo quitaPorDetras(12345, 3);
echo "<br>";

function quitaPorDelante(int $num, int $cant): int{

    $volteado = 0;
    while($num >= 1){
        $volteado = $volteado * 10 + ($num % 10);
        $num /= 10;
    }

    for($i = 0; $i < $cant; $i++){
        $volteado /= 10;
    }

    $num = 0;
    while($volteado >= 1){
        $num = $num * 10 + ($volteado % 10);
        $volteado /= 10;
    }

    return intval($num);

}

echo quitaPorDelante(12345, 2);

?>