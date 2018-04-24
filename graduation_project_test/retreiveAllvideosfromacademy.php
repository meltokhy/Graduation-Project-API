<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST')


{


// $connect ;
require 'connection.php';

$academy_code = $_POST["academy_code"];

$query = " SELECT player_videos FROM players_videos where academy_code = '$academy_code' " ;
$result = mysqli_query($connect , $query);
$json_array =  array();
while ($row = mysqli_fetch_assoc($result))
 {
  $json_array[] = $row;

}
//echo '<pre>';

$m=json_encode($json_array);
//return $m;
 print_r($m);
}
?>
