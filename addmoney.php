<?php include 'validate_ses.php';?>
<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

?>
<?php
if(isset($_POST['submit']))
 {
 include "config.php";
$uname=$_SESSION['username'];
$paybal=$_POST['paybal'];
$sql="SELECT * FROM `login` WHERE username='$uname'";
   if($result=mysqli_query($conn,$sql))
      {     
        if(mysqli_num_rows($result)==1)
          {
            $row=mysqli_fetch_array($result);

  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Money</title>
	<script type="text/javascript">
		window.onload = function()
		{
  		document.forms['addmoney'].submit();
		}
	</script>
</head>
<body>
		<form method="post" action="paytm/pgRedirect.php" name="addmoney">
		<input type="text" name="uname" id="uname" value="<?php echo $row['username']; ?>">
		<br><br>
		<input type="text" name="EMAIL" id="EMAIL" value="<?php echo $row['email_id']; ?>">
		<br><br>
		<input type="text" name="MSISDN" id="MSISDN" value="<?php echo $row['mobile_number']; ?>">
		<br><br>
		<input id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off"
		value="<?php echo time(). rand(10000,9999999)?>" hidden>
		<input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo $row['username']; ?>" hidden>
		<input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="EBussiness" hidden>
		<input id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB" hidden>
		<input title="TXN_AMOUNT" tabindex="10" type="text" name="TXN_AMOUNT" value="<?php echo $paybal;?>" hidden>
		
</form>

<?php
		}
			else
		{
		echo"sorry there is an error in fetching";
		echo mysqli_error($conn);
		}
	}
}
else
{
	header('Location:dashboard.php');
}
?>
</body>
</html>

