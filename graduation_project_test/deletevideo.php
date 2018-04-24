<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

require 'connection.php' ;
global $connect ;
$video_number = $_POST['video_number'];
$query1 = "SELECT player_videos from players_videos WHERE video_number = '$video_number'" ;
$res = mysqli_query($connect , $query1) ;
while($row= mysqli_fetch_array($res))
{
  $file = $row["player_videos"];
  echo $file ;
  unlink($file) ;


  //unlink("playervideos/".$file);
}

$query2 = "DELETE FROM players_videos WHERE video_number = '$video_number'" ;
mysqli_query($connect , $query2) ;

}
?>
