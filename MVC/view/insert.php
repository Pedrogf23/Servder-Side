<div class="insert">
  <!-- Formulario que envía por post los datos de la nueva nota al index con el action insert -->
  <form action="index.php?action=insert" method="post">
    <div class="insertNote">
      <input class="title" type="text" name="title" placeholder="Título..." />
      <hr />
      <textarea class="content" name="content" placeholder="Contenido..."></textarea>
    </div>
    <input class="ok" type="submit" value="Aceptar" />
  </form>
  <a href="index.php"><button class="cancel">Cancelar</button></a> <!-- Botón de cancelar -->
</div>