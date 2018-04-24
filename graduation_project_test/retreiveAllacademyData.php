<?php

// connection with DataBase
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{

global $connect ;
require 'connection.php';
$academy_id = $_POST["id"];

$query = " SELECT * FROM academy where id = '$academy_id' " ;
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
