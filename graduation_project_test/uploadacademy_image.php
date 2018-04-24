<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST'){

require 'Connection.php';
 global $connect ;

$id = $_POST['id'];
$targetpath = "academyimages/";
$targetpath = $targetpath.basename($_FILES['Academy_image']['name']);
$sql = "UPDATE  academy set Academy_image = '$targetpath' where id = '$id'";
if(mysqli_query($connect , $sql))
{
  if(move_uploaded_file($_FILES['Academy_image']['tmp_name'],$targetpath))
{
 echo 'success' ;
{

}}}}
?>
