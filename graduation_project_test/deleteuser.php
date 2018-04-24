<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){


  require 'Connection.php';

  deleteUser();
}

function deleteUser()
{
  global $connect ;
$id = $_POST["user_id"];


$sql = "DELETE FROM normal_users WHERE user_id = '".$id."' " ;

if (mysqli_query($connect, $sql)) {
    echo " record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

mysqli_close($connect);
}
?>
