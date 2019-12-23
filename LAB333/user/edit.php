<?php
session_start();
if(!isset($_SESSION['login']))
{
  header("location:login.php");
  die();
}
include 'user/code/header.php';
echo $id = $_GET['id'];
$conn = mysqli_connect('localhost','root','','blog');
$sql="SELECT * FROM post where id=$id";
$result=mysqli_query($conn ,$sql);
$row=mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Edit</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <br>
    <div class="container margin:0 auto;">
      <div style="max-width:1000px">
    <div class="panel panel-primary">
      <div class="panel-heading ">
        <h1 class=" font-weigt-bold">Add Post</h1>
      </div>
  <div class="panel-body">
     <form action="editCode.php?id=<?php echo  $id  ?>" method="post">
        <div class="form-group">
         <label for="exampleInputEmail1">Title</label>
         <input type="text" class="form-control"name="title"  id=" tile" placeholder="Title"value="<?php echo $row['title']?>">
        </div>
        <div class="form-group">
         <label for="exampleInput Desciption " ">Desciption </label>
         <input type="text" class="form-control"name="title"  id=" tile" placeholder="Title"value="<?php echo $row['descibtion']?>">
        </div>
        <div class="form-group">
         <label for="exampleInputDate">Date</label>
         <input type="date" class="form-control"name="data"  id="name" placeholder="Date"value="<?php echo $row['data']?>">
          <div class="form-group">
         <label for="exampleInputApprove">Approve</label>
         <input type="text" class="form-control"name="approve"  id="phone" placeholder="Approve"value="<?php echo $row['approve']?>">
       </div>
        <button type="submit"  class="btn btn-info" name="save"value="save">Submit</button>
      </form>
      </div>
      </div>
      </div>
    </div>
     
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>