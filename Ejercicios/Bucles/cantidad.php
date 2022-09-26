<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cantidad</title>
</head>
<body>
    <?php
    if(isset($_POST['cantidad'])){
        $cantidad = $_POST['cantidad'];
        ?>
        <form action="cantidad.php" method="post">
            <?php
            for($i = 0; $i < $cantidad; $i++){
            echo "<input type='number' name='$i'><br>";
            }
            ?>
            <input type="hidden" name="cantidad" value="<?=$cantidad?>">
            <input type="submit" value="Sumar">
        </form>
        <hr>
        <?php
        if(isset($_POST['0'])){
            $cantidad = $_POST['cantidad'];
            $suma = 0;
            for($i = 0; $i < $cantidad; $i++){
                $suma += $_POST[$i];
            }
            echo "La suma es $suma";
        }
    } else {
        ?>
        <form action="cantidad.php" method="post">
            <p>Introduce un número.</p>
            <input type="number" name="cantidad">
            <input type="hidden" name="suma" value="0">
            <br>
            <input type="submit" value="Siguiente">
        </form>
        <?php
    }
    ?>
</body>
</html>