<?php
    include('validate_ses.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Send Notification To all Users</title>
</head>
<body>
<form action="" method="post">
	  Enter Notification<br>
	 <textarea name="notif" id='notif' required autocomplete="off"  rows="6" cols='150'></textarea>
	<input type="hidden" name="type" id='type' value='all'><br><br>
	<input type="submit" name="submit" value="send Notification">
</form>
</body>
<?php
   if(isset($_POST['submit']))
   {
   	require('config.php');
    if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
          }
   	$t=$_POST['type'];
   	$n=$_POST['notif'];
   	$d=date('m-d-Y');
   	$sql=mysqli_query($conn," INSERT INTO `notifications`(`date`, `notification`, `type`) VALUES ('$d','$n','$t')");
    if($sql==TRUE)
    {
    	echo "Notification Sent Successfully ";
    }

   }
   ?>
</html>