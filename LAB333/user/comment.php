<?php
 $comment=$_POST['comment_body'];
 
$conn = mysqli_connect('localhost','root','','blog');
$sql="INSERT INTO comment VALUES (Null,' $comment',null,Null)";
if(mysqli_query($conn,$sql))

{
    header("location:main.php");
}
else
{
	echo "no successfully";

}
?>