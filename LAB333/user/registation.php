
<?php
include 'user/code/registation.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Registation</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <br>
     <?php if(isset($_SESSION['login'])) { ?>
     <div class="alert alert-warning">
        <strong>!Waring</strong> Registation Successfully
     </div>
     <?php } ?>
    <div class="container margin:0 auto;">
      <div style="max-width:1000px">
    <div class="panel panel-primary">
      <div class="panel-heading ">
        <h1 class=" font-weigt-bold">Registation</h1>
      </div>
  <div class="panel-body">
     <form action="regCode.php" method="post">
        <div class="form-group">
         <label for="exampleInput">Email</label>
         <input type="email" class="form-control"name="email"  id=" email" placeholder="Name" required>
        </div>
        <div class="form-group">
         <label for="exampleInput">Password </label>
         <input type="password" class="form-control"name="password" id="password" placeholder="Password"required>
        </div>
        <div class="form-group">
         <label for="exampleInputName">FullName</label>
         <input type="text" class="form-control"name="name"  id="name" placeholder="FullName"required>
       <div class="form-group">
         <label for="exampleInputPhone">Phone</label>
         <input type="number" class="form-control"name="phone"  id="phone" placeholder="Phone"required>
       </div>
        <button type="submit"  class="btn btn-info">Save</button>
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