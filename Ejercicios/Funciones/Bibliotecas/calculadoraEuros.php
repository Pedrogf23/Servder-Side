<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Euros</title>
</head>
<?php
include_once('euros.php');
?>
<body>
<?php
if(isset($_POST['enviar'])){
    if(!empty($_POST['pesetas'])){
        $pesetas2euros = pesetas2euros($_POST['pesetas']);
    } else if (!empty($_POST['euros'])){
        $euros2pesetas = euros2pesetas($_POST['euros']);
    }
}
?>
    <form action="calculadoraEuros.php" method="post">  
        Pesetas: <br>
        <input type="number" name="pesetas" value="<?=$euros2pesetas?>"> <br>
        Euros: <br>
        <input type="number" name="euros" value="<?=$pesetas2euros?>"> <br>
        <br>
        <input type="submit" name="enviar" value="Calcular">
    </form>
</body>
</html>