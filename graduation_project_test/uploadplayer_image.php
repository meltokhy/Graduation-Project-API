<?php
require 'connection.php' ;
if ($_SERVER['REQUEST_METHOD'] === 'POST'){

  require 'Connection.php';
  global $connect ;
  $player_id = $_POST['player_id'];
  $player_image = $_FILES['player_image']['name'] ;

  $sql = "UPDATE  players set player_image = '$player_image' where player_id = '$player_id'";
  if(mysqli_query($connect , $sql))
  {
    move_uploaded_file($_FILES['player_image']['tmp_name'],"playerimages/$player_image");
    echo "success";
  }
  else {
    echo "failed";
  }


}











?>
