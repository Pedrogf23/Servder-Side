<div class="list">
  <!-- Botón de crear nueva nota, que cambia el action a confirmInsert -->
  <a href="index.php?action=confirmInsert"><button class="insert">Crear nueva nota</button></a>
  <div class="listNotes">
    <?php
  if(count($dataToView) > 0){ // Si hay más de 0 elementos almacenados.
    foreach($dataToView as $note){ // Por cada elemento crea una nota con sus respectivos datos.
      ?>
    <div class="note">
      <p class="title"><?= $note->getTitle() ?></p>
      <hr />
      <div class="content">
        <p class="content"><?= $note->getContent() ?></p>
      </div>
      <!-- Botón de crear nueva nota, que cambia el action a confirmDelete -->
      <a href="index.php?action=confirmDelete&id=<?= $note->getId() ?>"><button class="delete">Eliminar</button></a>
      <!-- Botón de crear nueva nota, que cambia el action a confirmUpdate -->
      <a href="index.php?action=confirmUpdate&id=<?= $note->getId() ?>"><button class="update">Editar</button></a>
    </div>
    <?php
    }
  } else { // Si no hay más de 0 elementos, imprime un texto informativo por pantalla.
    ?>
    <p class="noNotes">No tienes notas creadas.</p>
    <?php
  }
  ?>
  </div>
</div>