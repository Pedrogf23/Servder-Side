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
$arrayFunciones = ['sumar', 'restar', 'multiplicar', 'dividir'];
?>
<body>
    <?php
    if(isset($_POST['enviar'])){
        for($i = 0; $i < count($arrayFunciones); $i++){
            echo $arrayFunciones[$i]." ".$_POST['num1']." y ".$_POST['num2']." = "; 
            echo $arrayFunciones[$i]($_POST['num1'], $_POST['num2'])." ";
            echo "<br/>";
        }
    } else {
    ?>
    <form action="#" method="post">
        <p>Introduce dos números.</p>
        <input type="number" name="num1"><br>
        <input type="number" name="num2"><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <?php
    }
    ?>
</body>
</html>