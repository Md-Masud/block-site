
<?php 
session_start();
session_destroy();
echo "logout Successfully";
header("location:login.php");
?>
