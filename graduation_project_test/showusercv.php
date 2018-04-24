<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST'){

require 'Connection.php';
 global $connect ;

$user_id = $_POST['user_id'];
$sql = "SELECT user_cv from normal_users where user_id = '$user_id'";
$result = mysqli_query($connect , $sql) ;
$cv = array();
while ($row = mysqli_fetch_array($result)) {

$cv[] = $row['user_cv'];


}
$m = json_encode($cv);
echo $m ;
}
?>
