<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST'){

require 'Connection.php';
 global $connect ;

$player_id = $_POST['player_id'];
$targetpath = "playerimages/";
$targetpath = $targetpath.basename($_FILES['player_image']['name']);
$sql = "UPDATE  players set player_image = '$targetpath' where player_id = '$player_id'";
if(mysqli_query($connect , $sql))
{
  if(move_uploaded_file($_FILES['player_image']['tmp_name'],$targetpath))
{
 echo 'success' ;
{

}}}}
?>
