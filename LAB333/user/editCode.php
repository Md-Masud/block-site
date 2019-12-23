<?php
  $id=$_GET['id'];
 $title= $_POST['title'];
 $desciption= $_POST['descibtion'];
 $date= $_POST['data'];
 $approve= $_POST['approve'];
$conn = mysqli_connect('localhost','root','','blog');
$sql="UPDATE post SET title='$title',descibtion ='$desciption',data='$date',approve='$approve' WHERE id=$id"; 

if(mysqli_query($conn,$sql))

{
    header("location:main.php?id=".$id);
}
else
{
	echo "no insert";

}
?>