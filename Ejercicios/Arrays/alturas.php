<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alturas</title>
</head>
<body>
    <?php
    $personas = [['Nombre'=>'Aitor', 'Altura'=>182, 'Email'=>'aitor@correo.com'], ['Nombre'=>'Pedro', 'Altura'=>172, 'Email'=>'pedro@correo.com'], ['Nombre'=>'Manuel', 'Altura'=>179, 'Email'=>'manuel@correo.com'], ['Nombre'=>'Francisco', 'Altura'=>174, 'Email'=>'paco@correo.com'], ['Nombre'=>'Román', 'Altura'=>173, 'Email'=>'roman@correo.com']];

    echo "<table border=1>";
    echo "<tr><th>Nombre</th><th>Altura</th><th>Email</th></tr>";
    foreach($personas as $gente){
        echo "<tr>";
        foreach($gente as $persona => $info){
            echo "<td>$info</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>