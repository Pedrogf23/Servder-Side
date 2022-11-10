<?php
require_once('../conexion.php');
$conn = conectar();


$sql = "UPDATE profesor SET nombreP='".$_POST['nombreP']."', apellido1='".$_POST['apellido1']."', apellido2='".$_POST['apellido2']."', telefono='".$_POST['telefono']."', mail='".$_POST['mail']."' WHERE idProfesor='".$_POST['idProfesor']."'";
if($conn->query($sql) === TRUE){
    echo 'Grupo actualizado correctamente.';
    header("Location: ../select/selectProfesores.php");
} else {
    echo 'Error: '. $sql . '<br>' . $conn->error;
}

?>