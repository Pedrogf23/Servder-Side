<?php

include_once('conexion.php');

$conn = conectar();

$id = $_GET['id'];
$tabla = $_GET['tabla'];

if($tabla == 'alumno'){
    $sql = 'DELETE FROM alumno WHERE idAlumno = '.$id;
    if($conn->query($sql) === TRUE){
        header("Location: select/selectAlumnos.php");
    } else {
        echo "Error: ". $conn->error;
    }
} else if($tabla == 'grupo'){
    $sql = 'DELETE FROM grupo WHERE idGrupo = '.$id;
    if($conn->query($sql) === TRUE){
        header("Location: select/selectGrupos.php");
    } else {
        echo "Error: ". $conn->error;
    }
} else if($tabla == 'profesor'){
    $sql = 'DELETE FROM profesor WHERE idProfesor = '.$id;
    if($conn->query($sql) === TRUE){
        header("Location: select/selectProfesores.php");
    } else {
        echo "Error: ". $conn->error;
    }
}



?>