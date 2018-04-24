<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST'){

require 'Connection.php';
 global $connect ;

$user_id = $_POST['user_id'];
$sql = "SELECT user_image from normal_users where user_id = '$user_id'";
$result = mysqli_query($connect , $sql) ;

$json_array= array();
while ($row = mysqli_fetch_array($result)) {

$json_array[] = $row['user_image'];
$m = json_encode($json_array);
echo $m ;
//echo "<img src = '$image'>" ;
}
}
?>
