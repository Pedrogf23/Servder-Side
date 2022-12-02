<?php

// Abrir la conexión.
function conectar(){
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db_name = "murallasreales";

    $mysqli = new mysqli($server, $user, $pass, $db_name);
    if($mysqli->connect_errno){
        echo 'Fallo al conectar a MySQL: ('. $mysqli->connnect_errno .')'. $mysqli->connect_error;
    }
    return $mysqli;
}

// Cerrar la conexión.
function cerrarConexion($connectionVar){
    $connectionVar->close();
}

?>