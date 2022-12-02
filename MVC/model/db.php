<?php

include_once 'config/config.php';

// Clase que se conecta con la Base de Datos.
class DB{

  // Atributos.
  private string $servername;
  private string $dbname;
  private string $username;
  private string $passwd;
  private $conection;

  // Constructor.
  public function __construct(){
    $this->servername = constant("DB_HOST");
    $this->username = constant("DB_USER");
    $this->passwd = constant("DB_PASSWD");
    $this->dbname = constant("DB");

    $this->conection = new mysqli($this->servername, $this->username, $this->passwd, $this->dbname);
    if($this->conection->connect_error){
      die("Conection failed: ". $this->conection->error);
    }
    
  }

  public function getConection(){
    return $this->conection;
  }

}



?>