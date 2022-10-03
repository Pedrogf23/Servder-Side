<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alturas</title>
    <style>
        #bajo td{
            background-color: #5a07a8;
            color: white;
        }
        #alto td {
            background-color: #eff53b;
        }
    </style>
</head>
<body>
    <?php
    if(isset($_POST['numPers'])){

        $numPers = $_POST['numPers'];

        if(isset($_POST['nombre0'])){

            //Guarda los datos en un array de arrays asociativos.
            for($i = 0; $i < $numPers; $i++){
                $personas[$i] = ['Nombre'=>$_POST['nombre'.$i], 'Altura'=>$_POST['altura'.$i], 'Email'=>$_POST['email'.$i]];
            }

            //Comprueba el más alto y el más bajo
            $masAlto = $personas[0]['Altura'];
            $masBajo = $personas[0]['Altura'];
            foreach($personas as $individuo){
                if($individuo['Altura'] > $masAlto){
                    $masAlto = $individuo['Altura'];
                } else if ($individuo['Altura'] < $masBajo){
                    $masBajo = $individuo['Altura'];
                }
            }

            //Crea la tabla.
            echo "<table border=1>";
            echo "<tr><th>Nombre</th><th>Altura</th><th>Email</th></tr>";
            foreach($personas as $individuo){

                //Si la altura es del mas bajo o del mas alto
                //le pone id a la fila.
                if($individuo['Altura'] == $masAlto){
                    echo "<tr id='alto'>";
                } else if ($individuo['Altura'] == $masBajo){
                    echo "<tr id='bajo'>";
                } else {
                    echo "<tr>";
                }

                foreach($individuo as $dato => $info){
                    echo "<td>$info</td>";
                }

                echo "</tr>";
            }
            echo "</table>";

        } else {

            echo "<form action='alturasv3.php' method='post'>";
            for($i = 0; $i < $numPers; $i++){
                echo "Nombre: ";
                echo "<input type='text' name='nombre".$i."'> ";
                    echo "Altura: ";
                echo "<input type='number' name='altura".$i."'> ";
                echo "Email: ";
                echo "<input type='email' name='email".$i."'> ";
                echo "<input type='hidden' name='numPers' value='". $numPers ."'>";
                echo "<br>";
            }
            echo "<input type='submit' value='Enviar'>";
            echo "</form>";
        }

    } else {
        ?>

        <form action="alturasv3.php" method="post">
            <p>¿Cuántas personas va a añadir?</p>
            <input type="number" name="numPers">
            <input type="submit" value="Enviar">
        </form>

        <?php
    }
    ?>
</body>
</html>