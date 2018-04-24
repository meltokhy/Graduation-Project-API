<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

require 'connection.php' ;
global $connect ;
$user_id = $_POST['user_id'];
$query1 = "SELECT * from normal_users WHERE user_id = '$user_id'" ;
$res = mysqli_query($connect , $query1) ;
while($row= mysqli_fetch_array($res))
{
  $file = $row["user_cv"];
  unlink($file) ;


}

$query2 = "UPDATE normal_users set user_cv = 'noicv' WHERE user_id = '$user_id'" ;
mysqli_query($connect , $query2) ;

}
?>
