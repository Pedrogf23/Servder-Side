<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Números pares entre 0 y 50:</h1>
  <ul>
    <?php
        for($i = 0; $i <= 50; $i++){
            if($i % 2 == 0){
                echo "<li>$i</li>";
            }
        }
        ?>
  </ul>
</body>

</html>