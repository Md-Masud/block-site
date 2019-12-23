<?php  
    
 ?>



 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title></title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
   <div class="container margin:0 auto;">
      <div style="">
    <div class="panel panel-default">
      <div class="panel-heading ">
        <h1 class="text-success font-weigt-bold">List View</h1>
      </div>
     <div class="panel-body">                                                                                                                                                              
        <div class="col-md-4">
         
        </div>
          <div class="col-md-9">
            <table class="table">

              <thead>
                
                <th>Email</th>
                <th>Paaword</th>
                <th>FullName</th>
                <th>Phone</th>
                </thead>
               <tbody>
               </tbody><?php while($row= mysqli_fetch_assoc($result)){ ?>
                <tr>
                  <td><?php echo $row['id']?></td>
                  <td><?php echo $row['email']?></td>
                  <td><?php echo $row['password']?></td>
                  <td><?php echo $row['name']?></td>
                  <td><?php echo $row['phone']?></td>
                </tr >
                <?php  }?>
                </tbody>
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