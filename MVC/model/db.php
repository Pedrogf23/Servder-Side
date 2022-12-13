<?php

include_once 'config/config.php';

// Clase que se conecta con la Base de Datos.
class DB{

  /* Atributos */
  private string $servername; // Servidor.
  private string $dbname; // Base de Datos.
  private string $username; // Usuario.
  private string $passwd; // Contraseña.
  private $conection; // Conexión.

  /* Constructor */
  public function __construct(){
    // Se inicializan los valores de la conexión mediante las constantes creadas en config.php.
    $this->servername = constant("DB_HOST");
    $this->username = constant("DB_USER");
    $this->passwd = constant("DB_PASSWD");
    $this->dbname = constant("DB");

    // Se crea la conexión y se almacena en $this->conection.
    $this->conection = new mysqli($this->servername, $this->username, $this->passwd, $this->dbname);
    if($this->conection->connect_error){ // Si hay algún error.
      die("Conection failed: ". $this->conection->error); // Cierra la conexión y devuelve un mensaje.
    }
    
  }

  /* Métodos */

  // Devuelve la conexión.
  public function getConection(){
    return $this->conection;
  }

  // Cierra la conexión.
  public function closeConection(){
    $this->conection->close();
  }

}



?>