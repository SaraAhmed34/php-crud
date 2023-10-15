<?php
$host='localhost';
$user='root';
$pass='';
$db='project_crud';
$conn=mysqli_connect($host,$user,$pass,$db);
if(!$conn){
  echo "connection failed".mysqli_connect_error();
}
?>