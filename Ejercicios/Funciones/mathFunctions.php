<?php

declare(strict_types = 1);

function voltear(int $num): int{

    $volteado = 0;
    while($num >= 1){
        $volteado = $volteado * 10 + ($num % 10);
        $num /= 10;
    }

    return intval($volteado);

}

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

    $volteado = voltear($num);

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

    $volteado = voltear($num);

    $volteado = quitaPorDetras($volteado, $cant);

    return intval(voltear($volteado));

}

echo quitaPorDelante(12345, 2);

?>