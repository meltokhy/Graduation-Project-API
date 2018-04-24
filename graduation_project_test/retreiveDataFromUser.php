<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET')
{
$servername = "localhost";
$username = "root";
$password = "";

$connect = mysqli_connect($servername , $username , $password ,"boshkash");
$query = " SELECT * FROM normal_users " ;
$result = mysqli_query($connect , $query);
$json_array =  array();
while ($row = mysqli_fetch_assoc($result))
 {
   $json_array[] = $row;

}
$m = json_encode($json_array)  ;
echo $m ;


}












?>
