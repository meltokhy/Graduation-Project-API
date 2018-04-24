<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){


  require 'connection.php';

  updatePlayer();
}




function updatePlayer()
{
global $connect ;
$player_id = $_POST["player_id"];
$player_name = $_POST["player_name"] ;
$player_Age = $_POST["player_Age"] ;
$Position = $_POST["Position"] ;
$player_length = $_POST["player_length"] ;
$player_weight = $_POST["player_weight"] ;
$player_attacking_power = $_POST["player_attacking_power"] ;
$player_speed = $_POST["player_speed"] ;
$player_defense = $_POST["player_defense"] ;
$player_finish = $_POST["player_finish"] ;
$player_kickingpower = $_POST["player_kickingpower"] ;
$academy_code = $_POST["academy_code"] ;





$sql = "UPDATE  players SET player_name = '".$player_name."' , player_Age = '".$player_Age."' , Position = '".$Position."' , player_length = '".$player_length."', player_weight = '".$player_weight."', player_attacking_power = '".$player_attacking_power."', player_speed = '".$player_speed."', player_defense = '".$player_defense."', player_finish = '".$player_finish."', player_kickingpower = '".$player_kickingpower."'  where player_id = '".$player_id."'" ;

//$sql2 = "UPDATE  plants set owner = '".$name."'  where owner = '".$oldName."'" ;

if (mysqli_query($connect, $sql)) {

    echo " record updated  successfully";
}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

mysqli_close($connect);

}
?>
