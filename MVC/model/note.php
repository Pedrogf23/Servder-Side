<?php

class Note{

  private int $id;
  private string $title;
  private string $content;

  public function __construct(int $id, string $title, string $content){

    $this->id = $id;
    $this->title = $title;
    $this->content = $content;

  }

  public function getId(){
    return $this->id;
  }

  public function getTitle(){
    return $this->title;
  }

  public function getContent(){
    return $this->content;
  }

}

class NoteTable{

  private string $table = 'note';
  private $conexion;
  private array $listNotes = array();

  public function __construct(){}

  public function insertNote(){

  }

  public function updateNote(){

  }

  public function getNotes(){
    
  }

  public function deleteNote(){

  }

}

?>