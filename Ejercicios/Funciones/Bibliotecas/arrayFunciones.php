<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array de Funciones</title>
</head>
<?php
include_once('biblioteca.php');
?>
<body>
    <form action="#" method="post">
        <input type="radio" name="operacion" value="sumar">Sumar <br>
        <input type="radio" name="operacion" value="restar">Restar <br>
        <input type="radio" name="operacion" value="multiplicar">Multiplicar <br>
        <input type="radio" name="operacion" value="dividir">Dividir <br>
        Introduce dos números: <br>
        <input type="number" name="num1"><br>
        <input type="number" name="num2"><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <?php
    if(isset($_POST['enviar'])){
        echo "Resultado = ".$_POST['operacion']($_POST['num1'], $_POST['num2']);
    }
    ?>
</body>
</html>