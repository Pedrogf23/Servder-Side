<?php

include_once 'model/note.php';
include_once 'config/config.php';

// Clase que controla las notas y las relaciona con las vistas.
class NoteController {

  /* Atributos */
  public string $view; // Vista que se quiere mostrar en cada momento.
  private NoteTable $noteTableObj; // Objeto noteTable, para interactuar con las Base de Datos.
  public string $title; // Título que se muestra en cada vista.

  /* Constructor */
  public function __construct(){

    $this->view = constant("DEFAULT_ACTION"); // Por defecto, al iniciar, la vista será la predeterminada.
    $this->noteTableObj = new NoteTable(); // Crea un objeto noteTable.
    
  }

  /* Métodos */
  
  // Lista de todas las notas.
  public function list(){
    $this->view = 'list'; 
    $this->title = "Tus notas"; 
    return $this->noteTableObj->getNotes(); // Devuelve el array con todas las notas en la BBDD.
  }

  // Confirmación de modificación.
  public function confirmUpdate(){
    $this->view = 'update';
    $this->title = "Editar nota";
    return $this->noteTableObj->getNoteById($_GET['id']); // Devuelve una nota, con el id pasado por url.
  }

  // Modificación de una nota.
  public function update(){
    $this->noteTableObj->updateNote($_GET['id'], $_POST['title'], $_POST['content']); // Actualiza la nota.
    return $this->list(); // Vuelve a la lista de notas.
  }

  // Confirmación de inserción.
  public function confirmInsert(){
    $this->view = 'insert';
    $this->title = "Nueva nota";
  }

  // Inserción de una nota.
  public function insert(){
    $this->noteTableObj->insertNote($_POST['title'], $_POST['content']); // Inserta la nota.
    return $this->list(); // Vuelve a la lista de notas.
  }

  // Confirmación de borrado.
  public function confirmDelete(){
    $this->view = 'delete';
    $this->title = "¿Seguro que quiere eliminar esta nota?";
    return $this->noteTableObj->getNoteById($_GET['id']); // Devuelve una nota, con el id pasado por url.
  }

  // Borrado de una nota.
  public function delete(){
    $this->noteTableObj->deleteNote($_GET['id']); // Elimina la nota.
    return $this->list(); // Vuelve a la lista de notas.
  }
}

?>