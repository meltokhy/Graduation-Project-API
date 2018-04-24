<?php



  if ($_SERVER['REQUEST_METHOD'] === 'POST'){


    require 'connection.php';

    createAcademy();
  }



   function createAcademy()
  {
    global $connect ;
    $Academy_name = $_POST["Academy_name"] ;
    $Academy_email = $_POST["Academy_email"] ;
    $Academy_password = $_POST["Academy_password"] ;
    $Academy_info= $_POST["Academy_info"] ;
    $Academy_code = $_POST["Academy_code"];





    $sql = "INSERT INTO  academy (Academy_name, Academy_email, Academy_password , Academy_info , Academy_code)
    VALUES ('$Academy_name' ,'$Academy_email' ,'$Academy_password' , '$Academy_info' ,'$Academy_code' )";



    mysqli_query($connect , $sql) or die ("FAILED");




    mysqli_close($connect);




}




?>
