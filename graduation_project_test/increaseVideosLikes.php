<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST'){


  require 'connection.php';

  increaseVideolikes();
}

function increaseVideolikes()
{
global $connect ;
if($connect){
    $name =$_POST["player_id"];




    $sql = "UPDATE `players_videos` SET `number_of_likes` = `number_of_likes` + 1 WHERE `player_id` = '$name'";

    mysqli_query($connect , $sql) ;
//        save image

}}

 ?>
