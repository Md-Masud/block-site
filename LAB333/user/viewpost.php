<?php
include 'code/header.php';
 $id = $_GET['id'];
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
    <title>view post</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <br>
    <div class="container margin:0 auto;">
      <div style="max-width:1000px">
    <div class="panel panel-primary">
      <div class="panel-heading ">
        <h1 class=" font-weigt-bold">View Post</h1>
      </div>
     <div class="panel-body">
     <table class="table">
             <tr>
               <th width="100" class="text-right">Title:</th>
              <td><?php  echo $row['title'];?></td>
             </tr>
             <tr>
               <th width="100" class="text-right">Descibtion:</th>
               <td><?php echo $row['descibtion'];?></td>
             </tr>
             <tr>
               <th width="100"class="text-right">Date:</th>
               <td><?php echo $row['data'];?></td>
             </tr>
             <tr>
               <th width="100" class="text-right">Approve:</th>
               <td><?php echo $row['approve'];?></td>
             </tr>
            </table>
             <form action="comment.php" method="post">
              <div class="form-group">
             <label for="exampleInpuComment">Comment </label>
             <textarea class="form-control"name="comment_body" id="comment" placeholder="Comment"></textarea><br>
             <button type="submit"  class="btn btn-info" value="save"name="save">Submit</button>
             </div>
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