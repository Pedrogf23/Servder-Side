function confirmDelete(id, tabla) {
  let confirmar = confirm(`¿Seguro que quiere eliminar ese ${tabla}?`);
  if (confirmar == true) {
    location.href = `../delete.php?id=${id}&tabla=${tabla}`;
  }
}

function confirmDeleteT(profesor, grupo) {
  let confirmar = confirm('¿Seguro que quiere eliminar esa tutoría?');
  if (confirmar == true) {
    location.href = `../delete.php?profesor=${profesor}&grupo=${grupo}`;
  }
}

function update(id, tabla) {
  if (tabla == 'grupo') {
    location.href = `../update/forms/formUpdateGrupo.php?id=${id}`;
  } else if (tabla == 'alumno') {
    location.href = `../update/forms/formUpdateAlumno.php?id=${id}`;
  } else if (tabla == 'profesor') {
    location.href = `../update/forms/formUpdateProfesor.php?id=${id}`;
  }
}

function updateT(idP, idG) {
  location.href = `../update/forms/formUpdateTutoria.php?idP=${idP}&idG=${idG}`;
}
