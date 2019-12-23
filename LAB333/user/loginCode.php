<?php

$conn = mysqli_connect('localhost','root','','blog');

 $email= $_POST['email'];
 $password=$_POST['password'];
 
$sql="SELECT * FROM user where  email='$email'and password='$password'";
$result=mysqli_query($conn ,$sql);
$row=mysqli_num_rows($result);
if($row == 1)
{
	session_start();
   $_SESSION['login']=true;
    
   header("location:main.php");
}
else
{
	session_start();
	 $_SESSION['error']=true;
	header("location:login.php");
}

?>