
<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST'){

require 'Connection.php';
 global $connect ;

$player_id = $_POST['player_id'];
$sql = "SELECT player_image from players where player_id = '$player_id'";
$result = mysqli_query($connect , $sql) ;
$json_array= array();

while ($row = mysqli_fetch_array($result)) {

$json_array[] = $row['player_image'];
$m = json_encode($json_array);
echo $m ;

//echo "<img src = '$image'>" ;
}
}
?>
