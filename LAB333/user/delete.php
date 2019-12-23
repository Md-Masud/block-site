<?php
session_start();
if(!isset($_SESSION['login']))
{
  header("location:login.php");
  die();
}
  $id=$_GET['id'];
$conn = mysqli_connect('localhost','root','','blog');
$sql="delete from post where id=$id ";
if(mysqli_query($conn,$sql))

{
	echo " Delete successfully";
    header("location:main.php");
}
else
{
	echo "no delete successfully";

}
?>