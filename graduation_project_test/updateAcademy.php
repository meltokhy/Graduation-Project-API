<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){


  require 'Connection.php';

  updateUser();
}




function updateUser()
{
global $connect ;

$id = $_POST["id"];
$Academy_name = $_POST["Academy_name"];
$Academy_email = $_POST["Academy_email"];
$Academy_password = $_POST["Academy_password"];
$Academy_info = $_POST["Academy_info"];





$sql = "UPDATE  academy set Academy_name = '".$Academy_name."' , Academy_email = '".$Academy_email."' , Academy_password = '".$Academy_password."' , Academy_info = '".$Academy_info."' where id = '".$id."'" ;

//$sql2 = "UPDATE  plants set owner = '".$name."'  where owner = '".$oldName."'" ;

if (mysqli_query($connect, $sql)) {

    echo " record updated  successfully";
}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

mysqli_close($connect);

}
?>
