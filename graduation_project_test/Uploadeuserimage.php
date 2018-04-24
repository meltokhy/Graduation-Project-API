
<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST'){

require 'Connection.php';
 global $connect ;

$user_id = $_POST['user_id'];
$targetpath = "userimages/";
$targetpath = $targetpath.basename($_FILES['user_image']['name']);
$sql = "UPDATE  normal_users set user_image = '$targetpath' where user_id = '$user_id'";
if(mysqli_query($connect , $sql))
{
  if(move_uploaded_file($_FILES['user_image']['tmp_name'],$targetpath))
{
 echo 'success' ;
{

}}}}
?>
