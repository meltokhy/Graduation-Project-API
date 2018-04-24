<?php

// connection with DataBase
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{

global $connect ;
require 'connection.php';

$player_id = $_POST["player_id"];

$query = " SELECT * FROM players where player_id = '$player_id' " ;
$result = mysqli_query($connect , $query);
$json_array =  array();
while ($row = mysqli_fetch_assoc($result))
 {
  $json_array[] = $row;

}


$m = json_encode($json_array);
print_r($m);
}
?>
