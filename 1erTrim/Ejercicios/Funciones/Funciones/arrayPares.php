<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contar los nº pares de un array</title>
  <?php require_once('crearArray.php'); ?>
</head>

<body>
  <?php
        function arrayPares(array $array) {
            $pares = 0;
            for($i = 0; $i < count($array); $i++){
                if($array[$i] % 2 == 0) {
                    $pares++;
                }
            }
            return $pares;
        }

        if(isset($_POST['enviar'])){
            echo "Hay ". arrayPares($array) ." números pares";
        }

    ?>
</body>

</html>