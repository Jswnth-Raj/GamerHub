<?php
	if(isset($_POST['submit']))
	{
		session_start();
		$p=md5($_POST['password']);
		$u=$_SESSION['uname'];

		require('config.php');
			    if (!$conn)
			     {
			          die("Connection failed: " . mysqli_connect_error());
			     }

			  $sql=mysqli_query($conn,"UPDATE `login` SET `password`='$p' WHERE `username`='$u';");
			  if($sql==TRUE)
			  {
			  	session_unset();
			  	$rset='true';
			  	header('Location:login.php?rset=$rset');
			  }
			  else
			  {
			  	mysqli_error($conn);
			  }
	}
	else
	{
		header('Location:forgot_password.php');
	}
	?>