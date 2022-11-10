<?php
require_once('../conexion.php');
$conn = conectar();


$sql = "UPDATE alumno SET idGrupo='".$_POST['idGrupo']."', nombreA='".$_POST['nombreA']."', apellido1='".$_POST['apellido1']."', apellido2='".$_POST['apellido2']."', expediente='".$_POST['expediente']."', telefono='".$_POST['telefono']."', mail='".$_POST['mail']."' WHERE idAlumno='".$_POST['idAlumno']."'";
if($conn->query($sql) === TRUE){
    echo 'Grupo actualizado correctamente.';
    header("Location: ../select/selectAlumnos.php");
} else {
    echo 'Error: '. $sql . '<br>' . $conn->error;
}

?>