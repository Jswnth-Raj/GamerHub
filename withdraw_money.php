<?php include 'validate_ses.php';?>
<!DOCTYPE html>
<html>
<head>
  <title>Withdraw Money</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
</head>
<body>
<?php
  if(isset($_POST['submit']))
  {
    include "config.php";
    $withdrawl=$_POST['debitbal'];
    $mobile_num=$_POST['mob'];
    $uname=$_SESSION['username'];
      $sql="SELECT  `wallet` FROM `login` WHERE username='$uname'";
         if($result=mysqli_query($conn,$sql))
            {     
              if(mysqli_num_rows($result)==1)
                {
                  $row=mysqli_fetch_array($result);
                  $wamt=$row['wallet'];
                  if($withdrawl<20)
                  {
                    echo "<div class='container'><h3><b><span style='color:red'>Minimum withdrawl amount 20 Rs<br>Redirecting to Wallet....!</b></span><h3></div>";
                    header('Refresh: 2; URL=mywallet.php');
                    exit();

                  }
                  if($withdrawl>$wamt)
                  {
                    echo "<div class='container'><h3><b><span style='color:red'>Amount entered is greater than your Wallet balance<br>Redirecting to Wallet....!</span></b><h3></div>";
                    header('Refresh: 2; URL=mywallet.php');
                    exit();
                  }
                  else
                  {
                    $updated_bal=$wamt-$withdrawl;
                    $sql1=mysqli_query($conn,"UPDATE `login` SET `wallet`='$updated_bal' WHERE `username`='$uname'");
                    $sql2=mysqli_query($conn,"INSERT INTO `transcations`(`username`,`mobile_number`,`type`, `amount`, `reason`,`status`) VALUES ('$uname','$mobile_num','debit','$withdrawl','Withdraw Under Processing','pending')");
                    if($sql1==TRUE and $sql2==TRUE)
                    {
                      header('Location:dashboard.php');
                    }
                    else
                    {
                      echo mysqli_error($conn);
                    }
                  }
              }
            }
            else
            {
              echo mysqli_error($conn);
            }
  }  
  else
  {
    header('Location:dashboard.php');
  }
?>

</body>
</html>