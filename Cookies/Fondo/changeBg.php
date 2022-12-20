<?php

setcookie('fondo', $_POST['color'], time() + 86400);
header('Location: fondo.php');

?>