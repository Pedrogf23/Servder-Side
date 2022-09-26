<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php
for($i = 0; $i < 50; $i++){
    $nums[$i] = rand(0, 99);
}
?>
<body>
    <ul>
        <?php
        for($i = 0; $i < 50; $i++){
            echo "<li>", $nums[$i] ,"</li>";
        }
        ?>
    </ul>
</body>
</html>