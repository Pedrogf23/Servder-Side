<?php

if(!isset($_COOKIE['visitas'])){

} else {
  if(isset($_POST['del'])){
    $visitas = 1;
    setcookie('visitas', $visitas);
    unset($_POST['del']);
  } else {
    $visitas = $_COOKIE['visitas'];
    setcookie('visitas', ++$visitas);
  }
}

echo 'Esta es tu '. $visitas .'ª visita';

?>
<form action="#" method="post">
  <input type="hidden" name="del" value="1">
  <input type="submit" value="Reiniciar">
</form>