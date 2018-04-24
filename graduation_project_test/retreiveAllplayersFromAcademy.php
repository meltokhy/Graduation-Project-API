<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){


  require 'connection.php';

  retreive_Academyplayers();
}

function retreive_Academyplayers()
{
global $connect ;

$json_array =  array();

 $check = 0 ;

$academy_code = $_POST["academy_code"];

$sql = "SELECT * FROM players where academy_code = '$academy_code'";

$result = mysqli_query($connect , $sql);


while($row = mysqli_fetch_array($result)){
    if( $academy_code == $row["academy_code"] ){
      $json_array[] = $row;

    } }



    $m = json_encode($json_array);
    print_r($m);
  }

    ?>
