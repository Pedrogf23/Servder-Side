<?php
// Función que comprueba si un array con números es capicúa o no.
function arrayCapicua(array $array): bool{


    // Variable que almacena si es o no capicúa.
    $esCapicua = true;
    
    // Se recorre la primera mitad el array comparándola con la otra mitad.
    for($i = 0; $i < ((count($array)-1) / 2); $i++){
        // Si no coincide, no es capicúa.
        if($array[$i] != $array[(count($array)-1-$i)]){
            $esCapicua = false;
        }
    }

    // Devuelve true o false dependiendo si es capicúa o no.
    return $esCapicua;

}

// Comprobación.
$array = [1,2,3,4,5,5,4,3,2,1];

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