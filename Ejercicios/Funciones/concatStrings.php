<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Función que concatena parámetros</title>
</head>
<body>
    <?php

    function concatStr(){
        if(func_num_args() == 0){
            return false;
        } else {
            $concat = "";
            for($i = 0; $i < func_num_args(); $i++){
                    $concat = $concat."".func_get_arg($i);
            }
            return $concat;
        }
    }

    echo "Valores concatenados: ". concatStr('Hola', 'me', 'llamo', 'Pedro');

    ?>
</body>
</html>