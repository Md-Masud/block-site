
<?php
include 'user/code/login.php';
session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <br>
    <?php if(isset($_SESSION['error'])) { ?>
     <div class="alert alert-warning">
        <strong>!Waring</strong> Wrong email and password
     </div>
     <?php } ?>
    <div class="container margin:0 auto;">
      <div style="max-width: 600px">
    <div class="panel panel-primary">
      <div class="panel-heading ">
        <h1 class=" font-weigt-bold">Login</h1>
      </div>
  <div class="panel-body">
     <form action="loginCode.php" method="post">
        <div class="form-group">
         <label for="exampleInputEmail1">Email</label>
         <input type="email" class="form-control"name="email"  id=" email" placeholder="Name">
        </div>
        <div class="form-group">
         <label for="exampleInputPassword1">Password </label>
         <input type="password" class="form-control"name="password" id="password" placeholder="Password">
        </div>
         <button type="submit"  class="btn btn-info" name="login">Submit</button>
         <ul class="nav navbar-nav pull-right">
          <li><a class="navbar-brand btn btn-info "href="registation.php">Registaion</a></li>
          <div class=""></div>
          </u>         
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
