<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){


  require 'connection.php';

  search_Userlogin();
}

function search_Userlogin()
{
global $connect ;

 $response = array();

 $check = 0 ;

$email = $_POST["user_email"];
$pass = $_POST["user_password"];

$sql = "SELECT * FROM normal_users";

$result = mysqli_query($connect , $sql);


while($row = mysqli_fetch_array($result)){
    if( $email == $row["user_email"] && $pass == $row["user_password"] ){
        array_push($response , array("user_name"=>$row["user_name"] , "user_email"=>$row["user_email"], "user_password"=>$row["user_password"] , "user_phone"=>$row["user_phone"] , "user_image"=>$row["user_image"]));
        json_encode($response);
        echo "  login done succcessfully .. " ;

        print_r($response);
        $check = 1;
        break;
     }else{
			$check=0;
    }

    }

if ($check == 0){
    echo "incorrect data .. " ;
}
}

?>
