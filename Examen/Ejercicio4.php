<?php
// Funcion que, dadas las filas, columnas, mímino y máximo
// construye un array bidimensional con números aleatorios
// sin repeticiones.
function crearArrayAleatorio(int $filas, int $columnas, int $min, int $max){

    // Si la cantidad que números comprendida entre el máximo y el mínimo (su suma uno para que el máximo también se incluya)
    // es menor que el tamaño total del array, devuelve false.
    if($max-$min+1 < $filas*$columnas){
        return false;
        // Ejemplo:
        // Si el tamaño del array es 40, pero el rango de números es 1 - 20,
        // solo se podrían generar 20 números, ya que no se pueden repetir.
        // De forma que cuando se genere el último número válido, el bucle
        // se quedaría generando números y comparándolos, pero siempre encontrará
        // un repetido por lo que se quedaría así de forma infinita.
    } else {
        // Primero crea un array de una dimensión, dónde se generan todos los valores y
        // se comprueba que no se repitan.
        for($i = 0; $i < $filas*$columnas; $i++){
        // Se genera un número.
            $num[$i] = rand($min, $max);
            // Bucle para comparar el nuevo número con todos los anteriores.
            for($j = 0; $j < $i; $j++){
                // Si se se encuntra un repetido, se genera un nuevo número hasta que no coincida.
                while($num[$i] == $num[$j]) {
                    $num[$i] = rand($min, $max);
                    // Se reinicia el bucle, para volver a comparar desde el inicio.
                    $j = 0;
                }
            }
        }

        // Índice del array de una dimensión.
        $k = 0;
        // Bucle que recorre las filas del array bidimensional.
        for($i = 0; $i < $filas; $i++){
            // Bucle que recorre las columnas del array bidimensional.
            for($j = 0; $j < $columnas; $j++){
                // Se va guardando en el array bidimensional los valores del array de una dimensión.
                $numBi[$i][$j] = $num[$k];
                // El índice del array de una dimensión aumenta.
                $k++;
            }
        }

        return $numBi;
    }
}

$array = crearArrayAleatorio(5, 8, 100, 999);

// Se crea la tabla para representar por pantalla el array.
echo "<table border=1>";
// Se recorre el array bidimensional, creando una fila de la tabla por cada fila del array.
for($i = 0; $i < count($array); $i++){
    echo "<tr>";
    // Se recorren las columnas del array bidimensional.
    for($j = 0; $j < count($array[0]); $j++){
        // Se muestra el contenido del array dentro de una columna.
        echo "<td>". $array[$i][$j] ."</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>