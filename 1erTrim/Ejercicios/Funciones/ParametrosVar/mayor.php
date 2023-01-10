<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funcion número mayor</title>
</head>

<body>
  <?php

    function mayor(): int{
        if(func_get_args() == 0){
            return false;
        } else {
            $mayor = func_get_arg(0);
            foreach(func_get_args() as $num){
                if($num > $mayor) {
                    $mayor = $num;
                }
            }
            return $mayor;
        }
    }

    echo "El mayor es ". mayor(1, 2, 5, 4, 17, 6, 678, 2, 0) .".";

    ?>
</body>

</html>