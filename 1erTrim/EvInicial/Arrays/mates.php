<?php

for($i = 0; $i < 33; $i++){
    $nums[$i] = rand(0, 100);
}

$mayor = $nums[0];
$menor = $nums[0];
$media = 0;

for($i = 0; $i < 33; $i++){
    if($nums[$i] < $menor) {
        $menor = $nums[$i];
    } else if($nums[$i] > $mayor) {
        $mayor = $nums[$i];
    }
    $media += $nums[$i];
}

echo "El mayor ha sido ", $mayor ,".<br>";
echo "El menor ha sido ", $menor ,".<br>";
echo "La media ha sido ", $media ,".<br>";

?>