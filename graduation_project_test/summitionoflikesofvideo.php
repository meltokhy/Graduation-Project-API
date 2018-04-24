<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST'){


  require 'connection.php';

  summitionVideolikes();
}

function summitionVideolikes()
{
global $connect ;
if($connect){
$name =$_POST["player_id"];

$query = "SELECT 	SUM (number_of_likes) FROM players_videos  WHERE  player_id = '$name'";
$query_run = mysqli_query($connect , $query) ;


while ($row = mysqli_fetch_assoc($query_run))
 {
  $json_array[] = $row;

}

$m=json_encode($json_array);
 print_r($m);



}}

 ?>
