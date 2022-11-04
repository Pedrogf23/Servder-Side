<?php
include_once('../conexion.php');

$conn = conectar();

function insertarGrupo($conn, $idGrupo, $nombre, $curso): string{
    $sql = "INSERT INTO grupo (`idGrupo`, `nombreG`, `curso`) VALUES ('$idGrupo', '$nombre', '$curso')";
    if($conn->query($sql) === TRUE){
        return 'Grupo insertado correctamente.';
    } else {
        return 'Error: '. $sql . '<br>' . $conn->error;
    }
}

function insertarAlumno($conn, $idAlumno, $idGrupo, $nombre, $apellido1, $apellido2, $expediente, $telefono, $mail): string{
    $sql = "INSERT INTO alumno (`idAlumno`, `idGrupo`, `nombreA`, `apellido1`, `apellido2`, `expediente`, `telefono`, `mail`) VALUES ('$idAlumno', '$idGrupo', '$nombre', '$apellido1', '$apellido2', '$expediente', '$telefono', '$mail')";
    if($conn->query($sql) === TRUE){
        return 'Alumno insertado correctamente.';
    } else {
        return 'Error: '. $sql . '<br>' . $conn->error;
    }
}

function insertarProfesor($conn, $idProfesor, $nombre, $apellido1, $apellido2, $telefono, $mail): string{
    $sql = "INSERT INTO profesor (`idProfesor`, `nombreP`, `apellido1`, `apellido2`, `telefono`, `mail`) VALUES ('$idProfesor', '$nombre', '$apellido1', '$apellido2', '$telefono', '$mail')";
    if($conn->query($sql) === TRUE){
        return 'Profesor insertado correctamente.';
    } else {
        return 'Error: '. $sql . '<br>' . $conn->error;
    }
}

?>