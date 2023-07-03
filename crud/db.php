<?php
session_start();

// Creacción de la conexión
$conn = mysqli_connect(
  'localhost',
  'cursophp',
  'cursophp1234',
  'php_mysql_crud'
) or die(mysqli_error($mysqli));

?>
