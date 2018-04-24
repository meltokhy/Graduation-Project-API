<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST'){

require 'Connection.php';
 global $connect ;

$id = $_POST['id'];
$sql = "SELECT Academy_image from academy where id = '$id'";
$result = mysqli_query($connect , $sql) ;
while ($row = mysqli_fetch_array($result)) {

$image = $row['Academy_image'];
echo $image ;
echo "<img src = '$image'>" ;
}
}
?>
