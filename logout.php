<?php  
session_start();
session_unset();
session_destroy();  
header("Location:login.php");
mysqli_close($conn);  
?>  