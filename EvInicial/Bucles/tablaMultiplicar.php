<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php
$num = $_GET['num'];
?>
<body>
    <form action="tablaMultiplicar.php" method="get">
        <input type="text" name="num">
        <input type="submit" value="Enviar">
    </form>
    <?php
    if(isset($num)){
        ?>
        <table>
            <thead>
                <tr>
                    <th>Tabla del <?php echo $num ?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                for($i = 1; $i <= 10; $i++){
                    echo "<tr><td> $i x $num </td>";
                    echo "<td>", $i*$num ,"</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <?php
    }
    ?>
</body>
</html>