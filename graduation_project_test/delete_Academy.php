<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){


  require 'Connection.php';

  deleteUser();
}

function deleteUser()
{
  global $connect ;
$id = $_POST["id"];


$sql = "DELETE FROM academy WHERE id = '".$id."' " ;

if (mysqli_query($connect, $sql)) {
} else {
}

mysqli_close($connect);
}
?>
