<?php
session_start();
 $email= $_POST['email'];
 $password=$_POST['password'];
 $name= $_POST['name']; 
 $phone= $_POST['phone'];
$conn = mysqli_connect('localhost','root','','blog');
$sql="SELECT * FROM user where  email='$email'and password='$password'";
$result=mysqli_query($conn ,$sql);
$row=mysqli_num_rows($result);
if($row == 1)
{
    echo "allready exist data";
}
else
{
	$sql="INSERT INTO user VALUES (Null,'$email','$password','$name','$phone')";
	if(mysqli_query($conn ,$sql))
	{
    echo "Registation Successfully";
    header("location:main.php");
}
else
{
	echo "no Registation Successfully ";

}
}
?>
