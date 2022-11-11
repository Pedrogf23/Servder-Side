<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php

$nombre = "Pedro";
$apellido1 = "González";
$apellido2 = "Fernández";
$anhoNac = 2003;
$numTlf = "640292592";

?>

<body>
  <table>
    <tr>
      <th colspan=2>Datos Personales</th>
    </tr>
    <tr>
      <td>Nombre:</td>
      <td><?php echo $nombre ?></td>
    </tr>
    <tr>
      <td>Apellidos:</td>
      <td><?php echo $apellido1 ," ", $apellido2 ?></td>
    </tr>
    <tr>
      <td>Año de nacimiento:</td>
      <td><?php echo $anhoNac ?></td>
    </tr>
    <tr>
      <td>Número de teléfono:</td>
      <td><?php echo $numTlf ?></td>
    </tr>
  </table>
</body>

</html>