<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehículos</title>
</head>
<body>
    <?php
    /* Almacena en un array bidimensional la matrícula, marca y modelo
    de tantos vehículos como el usuario quiera introducir mediante un formulario. 
    Recorre el array y muestra por pantalla la información en una tabla. */
    
    // Si la variable cantidad está, entra en el if, si no; va a la línea 79;
    if(isset($_POST['cantidad'])){
        $cantidad = $_POST['cantidad'];
        // Si la variable enviar está, entra en el if, si no; va a la línea 47;
        if(isset($_POST['enviar'])){
            //Se guardan los valores introducidos en el formulario en un array bidimensional.
            for($i = 0; $i < $cantidad; $i++){
                $vehiculos[$i]['matricula'] = $_POST['mat'.$i];
                $vehiculos[$i]['marca'] = $_POST['mar'.$i];
                $vehiculos[$i]['modelo'] = $_POST['mod'.$i];
            }
            // Mediante una tabla, se muestran los valores del array bidimensional.
            echo "<table border=1 style='text-align: center;'>";
            echo "<tr>";
            echo "<th colspan='4'>Vehículos</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<td></td>";
            echo "<td>Matrícula</td>";
            echo "<td>Marca</td>";
            echo "<td>Modelo</td>";
            echo "</tr>";
            // Bucle que crea tantas filas con la información de los vehículos como vehículos se hayan introducido.
            for($i = 0; $i < $cantidad; $i++){
                echo "<tr>";
                echo "<td>Vehículo". $i+1 ."</td>";
                echo "<td>". $vehiculos[$i]['matricula'] ."</td>";
                echo "<td>". $vehiculos[$i]['marca'] ."</td>";
                echo "<td>". $vehiculos[$i]['modelo'] ."</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            // Tabla mezclada con formulario dónde se introducen los datos de los vehículos.
            echo "<form action='repaso2.php' method='post'>";
            echo "<table border=1>";
            echo "<tr>";
            echo "<th colspan='4'>Vehículos</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<td></td>";
            echo "<td>Matrícula</td>";
            echo "<td>Marca</td>";
            echo "<td>Modelo</td>";
            echo "</tr>";
            // Bucle que se repite tantas veces como vehículos haya dicho el usuario que se van a introducir ($cantidad),
            // con los inputs dónde se introduce la información de los vehículos.
            for($i = 0; $i < $cantidad; $i++){
                echo "<tr>";
                echo "<td>Vehículo". $i+1 ."</td>";
                echo "<td><input type='text' name='mat$i'></td>";
                echo "<td><input type='text' name='mar$i'></td>";
                echo "<td><input type='text' name='mod$i'></td>";
                echo "</tr>";
            }
            echo "<tr style='text-align: center;'>";
            // De aquí sale la variable enviar.
            echo "<td colspan='4'><input type='submit' name='enviar' value='Introducir'></td>";
            echo "</tr>";
            echo "</table>";
            // Se pasa la cantidad por input oculto.
            echo "<input type='hidden' name='cantidad' value='$cantidad'>";
            echo "</form>";
        }
    } else {
        // Formulario inicial dónde se le pregunta al usuario la cantidad de vehículos que va a introducir.
        ?>
        <form action="repaso2.php" method="post">
            <p>¿Cuántos vehículos va a introducir?</p>
            <input type="number" name="cantidad">
            <input type="submit" value="Enviar">
        </form>
        <?php
    }
    ?>
</body>
</html>