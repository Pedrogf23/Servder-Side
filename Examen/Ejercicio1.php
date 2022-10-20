<?php
// Función que invierte un array.
function invertir(array $array): array{

    // Variable para recorrer en orden el array de invertidos.
    $j = 0;
    // Bucle que recorre del revés el array introducido.
    for($i = count($array)-1; $i >= 0; $i--){
        // Se van guardando los valores del array (empezando por el último) en el array de invertidos (en orden).
        $inv[$j] = $array[$i];
        // Aumenta el índice del array de invertidos.
        $j++;
    }
    // Devuelve el array invertido.
    return $inv;

}

// Función que comprueba si un array con números es capicúa o no.
function arrayCapicua(array $array): bool{

    // Con la función invertir, se guarda el array invertido.
    $arrayInvertido = invertir($array);

    // SI el array original es igual que el array invertido.
    if($array == $arrayInvertido){
        // Devuelve true.
        return true;
    // Si no son iguales.
    } else {
        // Devuelve false.
        return false;
    }

}

// Comprobación.
$array = [1,2,3,4,5,4,3,2,1];

foreach($array as $num){
    echo $num." ";
}

echo "<br>";

echo "El array ";
if(!arrayCapicua($array)){
    echo " no ";
} else if (arrayCapicua($array)){
    echo " si ";
}
echo "es capicúa.";

?>