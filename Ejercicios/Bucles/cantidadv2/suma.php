<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma</title>
</head>
<body>
    <?php
    $cantidad = $_POST['cantidad'];
    $suma = 0;
    for($i = 0; $i < $cantidad; $i++){
        $suma += $_POST['n'.$i];
    }
    ?>
    <div style="width: 50%; margin: auto; margin-top: 6%;">
        <table style="width: 50%; margin: auto; text-align: center;">
            <tr>
                <th>La suma es...</th>
            </tr>
            <tr>
                <td><?php echo $suma; ?></td>
            </tr>
        </table>
    </div>
</body>
</html>