<?php

include_once 'db.php';

// Clase Nota.
class Note{

  // Atributos
  private int $id;
  private string $title;
  private string $content;

  // Constructor.
  public function __construct(int $id, string $title, string $content){
    $this->id = $id;
    $this->title = $title;
    $this->content = $content;
  }

  // Getters y Setters.
  public function getId(){
    return $this->id;
  }
  public function setId(int $id){
    $this->id = $id;
  }

  public function getTitle(){
    return $this->title;
  }
  public function setTitle(int $title){
    $this->title = $title;
  }

  public function getContent(){
    return $this->content;
  }
  public function setContent(int $content){
    $this->content = $content;
  }

}

// Clase nota que interactúa con la base de datos.
class NoteTable{

  // Atributos.
  private string $table = 'note';
  private $conection;
  private array $listNotes = array();

  // Métodos. 
  
  // Inicializar la conexión con la bbdd.
  public function getConection(){
    $conn = new DB();
    $this->conection = $conn->getConection();
  }

  // Accede la base de datos y mete en $this->listNotes las notas que haya en la bbdd.
  public function getNotes(){
    $this->getConection();
    $sql = "SELECT * FROM $this->table";
    $result = $this->conection->query($sql);
    if($result->num_rows > 0){
      $i = 0;
      while($row = $result->fetch_assoc()){
        $this->listNotes[$i] = $row;
      }
    }
    return $this->listNotes;
  }

  public function getNoteById($id){
    $this->getConection();
    $sql = "SELECT * FROM $this->table WHERE id=$id";
    $result = $this->conection->query($sql);
    if($result->num_rows > 0){
      $row = $result->fetch_assoc();
      return new Note($row['id'], $row['title'], $row['content']);
    } else {
      return false;
    }
  }

  public function insertNote(){
    //devolver objeto nota
    $id = $this->conection->insert_id; // Devuelve el último id generado.
    
  }

  public function updateNote(){

  }

  public function deleteNote(){

  }

}

?>