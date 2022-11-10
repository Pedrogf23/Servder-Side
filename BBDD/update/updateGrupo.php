<?php
require_once('../conexion.php');
$conn = conectar();


$sql = "UPDATE grupo SET nombreG='".$_POST['nombreG']."', curso='".$_POST['curso']."' WHERE idGrupo='".$_POST['idGrupo']."'";
if($conn->query($sql) === TRUE){
    echo 'Grupo actualizado correctamente.';
    header("Location: ../select/selectGrupos.php");
} else {
    echo 'Error: '. $sql . '<br>' . $conn->error;
}

?>