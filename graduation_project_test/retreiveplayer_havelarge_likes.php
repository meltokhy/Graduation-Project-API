<?php
$servername = "localhost";
$username = "root";
$password = "";
$connect = mysqli_connect($servername , $username , $password ,"boshkash");
$query = "SELECT 	player_id FROM players_videos order by number_of_likes  DESC ";
$query_run = mysqli_query($connect , $query) ;

while ($row = mysqli_fetch_assoc($query_run))
 {
  $json_array[] = $row;

}

$m=json_encode($json_array);
 print_r($m);
 ?>
