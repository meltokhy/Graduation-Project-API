<?php


if ($_SERVER['REQUEST_METHOD'] === 'GET'){

require 'Connection.php';
 global $connect ;

$user_id = $_GET['user_id'];
$sql = "SELECT user_image from normal_users where user_id = '$user_id'";
$result = mysqli_query($connect , $sql) ;
while ($row = mysqli_fetch_array($result)) {

$image = $row['user_image'];
echo $image ;
echo "<img src = '$image'>" ;
}
}
?>
