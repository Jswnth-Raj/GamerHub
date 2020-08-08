<?php
ob_start( 'ob_gzhandler' );
?>
<?php include 'validate_ses.php';?>
<?php
if(isset($_POST['add']))
 {

 include "config.php";
 $uname=$_SESSION['username'];
 $points=$_POST['add'];
			$sql="SELECT  `ucwallet` FROM `login` WHERE username='$uname'";
			   if($result=mysqli_query($conn,$sql))
			      {     
			        if(mysqli_num_rows($result)==1)
			          {
			            $row=mysqli_fetch_array($result);
			            $amount=$points;
			            $wamt=$row['ucwallet'];
			            $updatedamt=$wamt+$amount;
			            $sql1=mysqli_query($conn,"UPDATE `login` SET `ucwallet`='$updatedamt' WHERE `username`='$uname'");
			            header('Location:myucwallet.php');
						
			          }
			      }
			      else
			      	echo mysqli_error($conn);
  }
  else
  	header('Location:dashboard.php');
  ?>