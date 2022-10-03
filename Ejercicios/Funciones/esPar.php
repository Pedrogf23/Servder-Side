<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Función es par</title>
</head>
<body>
    <?php
        function esPar(int $num) {
            return ($num % 2 == 0);
        }
    ?>
    <form action="esPar.php" method="post">
        <input type="number" name="numero">
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <?php
        if(isset($_POST['enviar'])){
            $numero = $_POST['numero'];
            echo "$numero";
            if(!esPar($numero)){
                echo " no";
            }
            echo " es par";
        }
    ?>
</body>
</html>