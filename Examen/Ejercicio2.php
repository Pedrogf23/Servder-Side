<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
</head>
<body>
    <?php
    if(isset($_POST['numAlum'])){
        // Si se ha recibido la cantidad de alumnos en el formulario inicial,
        // se guarda dicha cantidad en la variable $numAlum.
        $numAlum = $_POST['numAlum'];
        if(isset($_POST['nombre0'])){
            // Si se ha recibido el primer nombre, se ejecuta un bucle
            // que recoge todos los datos enviados del formulario de alumnos
            // y los guarda en un array bidimensional.
            for($i = 0; $i < $numAlum; $i++){
                $clase[$i] = ['Nombre'=>$_POST['nombre'.$i], 'Apellido1'=>$_POST['1ap'.$i], 'Apellido2'=>$_POST['2ap'.$i], 'AnyoNac'=>$_POST['anyo'.$i]];
            }
            // Se muestra una tabla con los datos del array.
            echo "<table border=1>";
            echo "<tr><th>Nombre</th><th colspan='2'>Apellidos</th><th>Año de nacimiento</th></tr>";
            // Bucle que recorre el array y crea una fila por cada alumno con toda su información.
            foreach($clase as $alumnos){
                echo "<tr>";
                foreach($alumnos as $alumno => $info){
                    echo "<td>$info</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            // Si no se ha recibido el primer nombre, muestra un
            // formulario dónde se pide al usuario la información de los alumnos.
            echo "<form action='Ejercicio2.php' method='post'>";
            // Bucle que repite los inputs tantas veces como número
            // de alumnos haya introducido el usuario.
            for($i = 0; $i < $numAlum; $i++){
                echo "Nombre: ";
                echo "<input type='text' name='nombre".$i."'> ";
                echo "Primer apellido: ";
                echo "<input type='text' name='1ap".$i."'> ";
                echo "Segundo apellido: ";
                echo "<input type='text' name='2ap".$i."'> ";
                echo "Año de nacimiento: ";
                echo "<input type='anyo' name='anyo".$i."'> ";
                echo "<input type='hidden' name='numAlum' value='". $numAlum ."'>";
                echo "<br>";
            }
            echo "<input type='submit' value='Enviar'>";
            echo "</form>";
        }
    } else {
        // si no se ha recibido la cantidad de alumnos, muestra el formulario inicial.
        ?>
        <form action="Ejercicio2.php" method="post">
            <p>¿Cuántos alumnos va a añadir?</p>
            <input type="number" name="numAlum">
            <input type="submit" name="enviar" value="Enviar">
        </form>
        <?php
    }
    ?>
</body>
</html>