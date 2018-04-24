<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST'){

require 'Connection.php';
 global $connect ;

$user_id = $_POST['user_id'];
$targetpath = "usercv/";
$targetpath = $targetpath.basename($_FILES['user_cv']['name']);
$sql = "UPDATE  normal_users set user_cv = '$targetpath' where user_id = '$user_id'";
if(mysqli_query($connect , $sql))
{
  if(move_uploaded_file($_FILES['user_cv']['tmp_name'],$targetpath))
{
{

}}}}
?>
