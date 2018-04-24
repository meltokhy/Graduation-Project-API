<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){


  require 'Connection.php';

  test();
}

function test()
{
global $connect ;
$id = $_POST["player_id"];
$player_image = addslashes($_FILES["player_image"]["tmp_name"]);
$player_image = file_get_contents($player_image);
$player_image = base64_decode($player_image) ;
$sql = "UPDATE  players set player_image = '$player_image' where player_id = '$id'";

 mysqli_query($connect , $sql ) or die ("FAILED");

 mysqli_close($connect);
}
?>
