<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabla de multiplicar</title>
  <style>
  table {
    border-collapse: collapse;
    margin: auto;
  }

  td {
    border: 2px lightgray solid;
    width: 2em;
    height: 2em;
    text-align: center;
  }

  #up {
    background-color: blue;
  }

  #down {
    background-color: orange;
  }
  </style>
</head>

<body>
  <?php
    const SIZE =  11;
    echo "<table>";
    for($i = 0; $i <= SIZE; $i++){
        echo "<tr>";
        for($j = 0; $j <= SIZE; $j++){
            if($i == 0 && $j == 0){
                echo "<td id='up'>x</td>";
            } else if ($i == 0){
                echo "<td id='up'>", $j-1 ,"</td>";
            } else if ($j == 0){
                echo "<td id='down'>", $i-1 ,"</td>";
            } else {
                echo "<td>",($i-1)*($j-1),"</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>