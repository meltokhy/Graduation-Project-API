<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){


  require 'connection.php';

  search_Academylogin();
}

function search_Academylogin()
{
global $connect ;

 $response = array();

 $check = 0 ;

$email = $_POST["Academy_email"];
$pass = $_POST["Academy_password"];

$sql = "SELECT * FROM academy";

$result = mysqli_query($connect , $sql);


while($row = mysqli_fetch_array($result)){
    if( $email == $row["Academy_email"] && $pass == $row["Academy_password"] ){
        array_push($response , array("Academy_name"=>$row["Academy_name"] , "Academy_email"=>$row["Academy_email"], "Academy_password"=>$row["Academy_password"] , "Academy_info"=>$row["Academy_info"] , "Academy_image"=>$row["Academy_image"], "Academy_code"=>$row["Academy_code"] ));
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
