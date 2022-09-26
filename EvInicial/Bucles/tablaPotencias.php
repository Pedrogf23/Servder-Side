<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php
$num = $_GET['num'];
$elev = $_GET['elev'];
?>
<body>
    <form action="tablaPotencias.php" method="get">
        <input type="text" name="num">
        ^
        <input type="text" name="elev">
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
                for($i = 1; $i <= $elev; $i++){
                    echo "<tr><td> $num^$i </td>";
                    echo "<td>", $num**$i ,"</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <?php
    }
    ?>
</body>
</html>