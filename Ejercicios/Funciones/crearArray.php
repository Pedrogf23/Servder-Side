<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Función crear array.</title>
</head>
<body>
    <?php
        function arrayAleatorio(int $tam, int $min, int $max, &$array) {
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
        $tam = $_POST['tam'];
        $max = $_POST['max'];
        $min = $_POST['min'];
        $array = array();

        arrayAleatorio($tam, $min, $max, $array);

        foreach($array as $dato){
            echo $dato." ";
        }

        echo "<br>";

    }
    ?>
</body>
</html>