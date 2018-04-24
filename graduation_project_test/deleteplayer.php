<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){


  require 'Connection.php';

  deletePlayer();
}

function deletePlayer()
{
  global $connect ;
$id = $_POST["player_id"];


$sql = "DELETE FROM players WHERE player_id = '".$id."' " ;

if (mysqli_query($connect, $sql)) {
    echo " record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

mysqli_close($connect);
}
?>
