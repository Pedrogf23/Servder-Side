<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php
function esPar(int $num){
    if($num % 2 == 0){
        return true;
    } else {
        return false;
    }
}
$num = $_GET['num'];
?>
<body>
    <form action="esPar.php" method="get">
        <input type="text" name="num">
        <input type="submit" value="Comprobar">
    </form>
    <?php
    if(isset($num)){
        echo $num;
        if(!esPar($num)){
            echo " no";
        }
        echo " es par.";
    }
    ?>
</body>
</html>