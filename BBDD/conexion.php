<?php

// Abrir la conexión.
function conectar(){
    $host = "";
    $user = "";
    $pass = "";
    $db_name = "";

    $mysqli = new mysqli($host, $user, $pass, $db_name);
    if($mysqli->connect_errno()){
        echo 'Fallo al conectar a MySQL: ('. $mysqli->connnect_errno() .')'. $mysqli->connect_error();
    }
    return $mysqli;
}

// Cerrar la conexión.
function cerrarConexion($connectionVar){
    $connectionVar->close();
}

?>