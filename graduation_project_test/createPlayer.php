<?php



  if ($_SERVER['REQUEST_METHOD'] === 'POST'){


    require 'connection.php';

    createPlayer();
  }



   function createPlayer()
  {
    global $connect ;

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





    $sql = "INSERT INTO  players (player_name, player_Age, Position , player_length , player_weight ,player_attacking_power,player_speed,player_defense,player_finish,player_kickingpower,academy_code)
    VALUES ('$player_name' ,'$player_Age' ,'$Position' , '$player_length' , '$player_weight' , '$player_attacking_power' , '$player_speed' , '$player_defense' , '$player_finish' , '$player_kickingpower', '$academy_code' )";

     mysqli_query($connect , $sql ) or die ("FAILED");

     mysqli_close($connect);


}




?>
