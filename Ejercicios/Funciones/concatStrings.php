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

    function concatStr(...$strings): string{
        if(count($strings) == 0){
            return false;
        } else {
            $concat = "";
            foreach($strings as $palabra){
                $concat = $concat."".$palabra;
            }
            return $concat;
        }
    }

    echo "Valores concatenados: ". concatStr('Hola', 'me', 'llamo', 'Pedro');

    ?>
</body>
</html>