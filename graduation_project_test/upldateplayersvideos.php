<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST'){

require 'Connection.php';
 global $connect ;

$player_id = $_POST['player_id'];
$academy_code = $_POST['academy_code'] ;
$targetpath = "playervideos/";
$video_text = $_POST['video_text'];
$targetpath = $targetpath.basename($_FILES['player_videos']['name']);
$sql = "INSERT INTO players_videos (player_id , academy_code , player_videos ,video_text) VALUES ('$player_id' ,'$academy_code' ,'$targetpath','$video_text')";
if(mysqli_query($connect , $sql))
{
  if(move_uploaded_file($_FILES['player_videos']['tmp_name'],$targetpath))
{
 echo 'success' ;
{

}}}}
?>
