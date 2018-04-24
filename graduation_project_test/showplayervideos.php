<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET'){

require 'Connection.php';
 global $connect ;

$player_id = $_GET['player_id'];
$video_number = $_GET['video_number'];

$sql = "SELECT player_videos from players_videos where player_id = '$player_id' and video_number = '$video_number'";
$result = mysqli_query($connect , $sql) ;
while ($row = mysqli_fetch_array($result)) {

$image = $row['player_videos'];
echo $image ;
echo "<video src = '$image'> />" ;
}
}
?>
