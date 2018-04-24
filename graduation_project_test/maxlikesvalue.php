<?php
$servername = "localhost";
$username = "root";
$password = "";
$connect = mysqli_connect($servername , $username , $password ,"boshkash");


  $query = "SELECT 	MAX( number_of_likes) FROM players_videos";
  $query_run = mysqli_query($connect , $query) ;

  $row2 = mysqli_fetch_assoc($query_run);

    $json_array[] = $row2;

  $m=json_encode($json_array);
   print_r($m);

 ?>
