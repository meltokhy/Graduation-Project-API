<?php
$servername = "localhost";
$username = "root";
$password = "";
$connect = mysqli_connect($servername , $username , $password ,"boshkash");
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
