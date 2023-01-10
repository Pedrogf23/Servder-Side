<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Media de los valores</title>
  </head>
  <body>
    <?php
    /* Realiza una función que dado una serie de valores, devuelva su promedio.
    Para probarla, se deberán pedir dichos valores en un formulario. */

    /* La función recibe un array con números,
    comprueba que no esté vacío y calcula la media. */
    function media(array $nums){
      // Si el array está vacío, devuelve false.
      if (count($nums) == 0){
        return false;
      } else {
        // Si no está vacío, va sumando todos los números.
        $suma = 0;
        foreach($nums as $num){
          $suma += $num;
        }
        // Y devuelve la suma dividida entre la cantidad de números; es decir, la media.
        return ($suma / count($nums));
      }
    }

    // Si la cantidad está, entra al if; si no, va a la línea 56.
    if(isset($_POST['cantidad'])){
      $cantidad = $_POST['cantidad'];
      // Si la variable enviar está, entra el if; si no, va a la línea 42.
      if(isset($_POST['enviar'])){
        // Se guardan los números introducidos en un array.
        for($i = 0; $i < $cantidad; $i++){
          $nums[$i] = $_POST['n'.$i];
        }
        // Se le pasa el array a la función creada anteriormente y se muestra el resultado.
        echo "La media es ". media($nums).".";
      } else {
        // Formulario en el que se introducen los números de los que se quiere calcular la media.
        echo "<p>Introduzca $cantidad números:</p>";
        echo "<form action='repaso1.php' method='post'>";
        for($i = 0; $i < $cantidad; $i++){
          echo "<input type='number' name='n$i'><br>";
        }
        echo "<br>";
        // De aquí sale la variable 'enviar'.
        echo "<input type='submit' name='enviar' value='Calcular media'>";
        // Se pasa la cantidad por input oculto.
        echo "<input type='hidden' name='cantidad' value='$cantidad'>";
        echo "</form>";
      }
    } else {
      // Formulario para recibir la cantidad de números que va a introducir el usuario.
      ?>
      <form action="repaso1.php" method="post">
        <p>¿Cuantos números va a introducir?</p>
        <input type="number" name="cantidad">
        <input type="submit" value="Enviar">
      </form>
      <?php
    }
    ?>
  </body>
</html>
