<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{


global $connect ;
require 'connection.php';

$user_id = $_POST["user_id"];

$query = " SELECT * FROM normal_users where user_id = '$user_id' " ;
$result = mysqli_query($connect , $query);
$json_array =  array();
while ($row = mysqli_fetch_assoc($result))
 {
  $json_array[] = $row;

}
//echo '<pre>';

$m = json_encode($json_array) ;
//print_r($m);
//echo '';
echo $m ;
}
?>
