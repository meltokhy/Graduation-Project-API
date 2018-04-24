<?php



  if ($_SERVER['REQUEST_METHOD'] === 'POST'){


    require 'connection.php';

    createUser();
  }



   function createUser()
  {
    global $connect ;

    $User_name = $_POST["user_name"] ;
    $User_email = $_POST["user_email"] ;
    $User_password = $_POST["user_password"] ;
    $User_phone = $_POST["user_phone"] ;





    $sql = "INSERT INTO  normal_users (user_name, user_email, user_password , user_phone)
    VALUES ('$User_name' ,'$User_email' ,'$User_password' , '$User_phone' )";



    mysqli_query($connect , $sql) or die ("FAILED");




    mysqli_close($connect);




}




?>
