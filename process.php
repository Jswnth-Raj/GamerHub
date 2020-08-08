<?php include 'validate_ses.php';?>
<!DOCTYPE html>
<html>
<head>
  <title>Processing</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
</head>
<body>

</body>
</html>
<?php
if(isset($_POST['submit']))
{
   $amount=$_POST['amt'];
   $mid=$_POST['mid'];
   $uid=$_POST['userid'];
   $cid=$_POST['charid'];
   include("config.php");
   $uname=$_SESSION['username'];
   $sql6="SELECT * FROM `participants` WHERE `userid`='$uid' AND `match_id`='$mid'";
   if($result6=mysqli_query($conn,$sql6))
      {     
        if(mysqli_num_rows($result6)>0)
          {
            echo "<br><span style='color:red'>User Already participating in the contest...<br>Redirecting to Homepage...</span>";
            header('Refresh: 2; URL=dashboard.php');
            exit();
          }
        }
        else
        {
          echo mysqli_error($conn);
        }
   $sql="SELECT  `wallet` FROM `login` WHERE username='$uname'";
   if($result=mysqli_query($conn,$sql))
      {     
        if(mysqli_num_rows($result)>0)
          {
            $row=mysqli_fetch_array($result);
            $wamt=$row['wallet'];
            if($wamt<$amount)
            {
              $low=1;
              header("Location:addcards.php?low=$low");
            }
            else
            {
              $updatedamt=$wamt-$amount;
              $sql1=mysqli_query($conn,"UPDATE `login` SET `wallet`='$updatedamt' WHERE `username`='$uname'");
              $sql2=mysqli_query($conn,"INSERT INTO `participants`(`username`, `userid`, `charid`, `match_id`) VALUES ('$uname','$uid','$cid','$mid')");
              $sql3=mysqli_query($conn,"UPDATE `contest`SET `count`=count+1 WHERE match_id='$mid'");
              $sql4=mysqli_query($conn,"INSERT INTO `transcations`(`username`,`type`, `amount`, `reason`,`status`) VALUES ('$uname','debit','$amount','Match Joined - #$mid ','success')");
              if($sql2==TRUE && $sql1==TRUE && $sql3==TRUE && $sql3==TRUE)
              {
                
                header("Location:dashboard.php");
              }
              else
              {
                echo "Something went Wrong";
                echo mysqli_error($conn);
              }
            }
            

          }
         }

}
else
{
  header('Location:dashboard.php');
}

?>