<?php include 'validate_ses.php';?>
<?php
ob_start( 'ob_gzhandler' );
?>
<?php 
require('config.php');
if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
          }
          $n=$_SESSION['username'];
        $sql9="SELECT ucwallet FROM `login` where username='$n';";
    if($result9=mysqli_query($conn,$sql9))
      {     
        if(mysqli_num_rows($result9)==1)
          {
          $row9=mysqli_fetch_array($result9);
          $bal=$row9['ucwallet'];
          }
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>My UC Wallet</title>

  <!-- CSS  -->
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/index.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="css/font-awesome-4.3.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png" sizes="192*192">
  <link rel="icon" href="images/favicon.png" type="image/png" sizes="192*192">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>

  <div class="container">
  <div style="display: flex; justify-content: center;">
  <img src='images/uc.svg' width="200px" height="100%">
  </div><br>
  <div class='center z-depth-2' style='font-size:30px;'>
    <span class="red-text"><b>100 Points = 1 UC</b></span><br>
   Balance: <b>¢<?php echo $row9['ucwallet'];?> points</b>
  </div>
  <br><br>
  <div class='center'>
    <a class="waves-effect waves-light btn-large indigo darken-4 z-depth-2" href="watch_ads.html" style='width:260px' ><i class="material-icons left">personal_video</i>Watch Ad's</a>
  </div>
  <div class='center'>
    <a class="waves-effect waves-light btn-large  red darken-4 z-depth-2" href="redeemuccards.php" style='width:260px'><i class="material-icons left">arrow_downward</i>Redeem UC</a>
  </div>
  <div class='center'>
    <a class="waves-effect waves-light btn-large green darken-3 z-depth-2" href="my_uc_transcations.php" style='width:260px'><i class="material-icons left">assignment</i>My Transcations </a>
  </div>
</div>
  <div class='container' style='font-size:13.5px;'>
    <br>
    <span>* <b>Note:</b> Enter Valid Pubg User ID and Character ID</span><br>
    <span>* Minimum reedem points must be more than 799 points i,e 8 UC</span><br>
    <span>* UC will be credited into your PUBG account winth in 24 hours</span><br>
    <span>* You can check transcation status in My Transcations Tab</span><br>
    <span>* If you have any queries anytime send us in Contact us Tab</span>

  </div>
  <br><br><br><br>

  <!--  Scripts-->
  <script type="text/javascript" script-name="alex-brush" src="http://use.edgefonts.net/alex-brush.js"></script>
  <script type="text/javascript" script-name="carter-one" src="http://use.edgefonts.net/carter-one.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script>
  $(document).ready(function(){
    $('.materialboxed').materialbox();
     $('.parallax').parallax();
      $('.button-collapse').sideNav();
  });
  </script>
  <script>
  	    $('.head-link').click(function(e) {
        e.preventDefault();
        
        var goto = $(this).attr('href');

        $('html, body').animate({
            scrollTop: $(goto).offset().top
        }, 800);
    });

  </script>
  <script>
  </script>
  </body>
</html>