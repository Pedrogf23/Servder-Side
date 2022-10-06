<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Función crear array</title>
</head>
<body>
    <?php
        function arrayAleatorio(int $tam, int $min, int $max) {
            for($i = 0; $i < $tam; $i++){
                $array[$i] = rand($min, $max);
            }
            return $array;
        }
    ?>
    <form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="post">
        <p>Tamaño</p>
        <input type="num" name="tam">
        <p>Máximo</p>
        <input type="num" name="max">
        <p>Mínimo</p>
        <input type="num" name="min"><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <?php
    if(isset($_POST['enviar'])){

        $array = arrayAleatorio($_POST['tam'], $_POST['min'], $_POST['max']);

        foreach($array as $num){
            echo $num." ";
        }

        echo "<br>";

    }
    ?>
</body>
</html>