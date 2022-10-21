<?php
// Función que comprueba si un array con números es capicúa o no.
function arrayCapicua(array $array): bool{

    $esCapicua = true;
    
    for($i = 0; $i < ((count($array)) / 2); $i++){
        if($array[$i] != $array[(count($array)-1-$i)]){
            $esCapicua = false;
        }
    }

    return $esCapicua;

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