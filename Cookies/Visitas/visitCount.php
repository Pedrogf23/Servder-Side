<?php

if(!isset($_COOKIE['visitas'])){
  $visitas = 1;
  setcookie('visitas', $visitas);
} else {
  $visitas = $_COOKIE['visitas'];
  setcookie('visitas', ++$visitas);
}

echo 'Esta es tu '. $visitas .'ª visita';

?>
<form action="resetCount.php" method="post">
  <input type="submit" value="Reiniciar">
</form>