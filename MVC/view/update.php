<div class="update">
  <!-- Formulario que envía por post los nuevos datos de la nota al index con el action update y el id de la nota en cuestión. -->
  <form action="index.php?action=update&id=<?= $dataToView->getId() ?>" method="post">
    <div class="updateNote">
      <input class="title" type="text" value="<?= $dataToView->getTitle() ?>" name="title" placeholder="Título..." />
      <hr />
      <textarea class="content" name="content" placeholder="Contenido..."><?= $dataToView->getContent() ?></textarea>
    </div>
    <input class="ok" type="submit" value="Aceptar" />
  </form>
  <a href="index.php"><button class="cancel">Cancelar</button></a>
</div>