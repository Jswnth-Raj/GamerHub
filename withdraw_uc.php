<?php include 'validate_ses.php';?>
<?php
ob_start( 'ob_gzhandler' );
?>
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
    $puid=$_POST['puid'];
    $pcid=$_POST['pcid'];
    $uname=$_SESSION['username'];
      $sql="SELECT  `ucwallet` FROM `login` WHERE username='$uname'";
         if($result=mysqli_query($conn,$sql))
            {     
              if(mysqli_num_rows($result)==1)
                {
                  $row=mysqli_fetch_array($result);
                  $wamt=$row['ucwallet'];
                  if($withdrawl<800)
                  {
                    echo "<div class='container'><h3><b><span style='color:red'>Minimum Redeem Points 800 <br>Redirecting to Wallet....!</b></span><h3></div>";
                    header('Refresh: 2; URL=myucwallet.php');
                    exit();

                  }
                  if($withdrawl>$wamt)
                  {
                    echo "<div class='container'><h3><b><span style='color:red'>Points entered is more than your UC Wallet balance<br>Redirecting to Wallet....!</span></b><h3></div>";
                    header('Refresh: 2; URL=myucwallet.php');
                    exit();
                  }
                  else
                  {
                    $updated_bal=$wamt-$withdrawl;
                    $sql1=mysqli_query($conn,"UPDATE `login` SET `ucwallet`='$updated_bal' WHERE `username`='$uname'");
                    $sql2=mysqli_query($conn,"INSERT INTO `uc_transactions`(`username`, `pubg_user_id`, `pubg_char_id`, `reason`, `points`, `status`) 
                      VALUES('$uname','$puid','$pcid','Reedem Under Processing','$withdrawl','pending')");
                    if($sql1==TRUE and $sql2==TRUE)
                    {
                      header('Location:myucwallet.php');
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
    header('Location:myucwallet.php');
  }
?>

</body>
</html>