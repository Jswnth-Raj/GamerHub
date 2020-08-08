<?php include 'validate_ses.php';?>
<?php
ob_start( 'ob_gzhandler' );
?>
<?php 
require('config.php');
if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
          }
          $referral_code=$_SESSION['username'];
       
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Refer</title>

  <!-- CSS  -->
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/index.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="css/font-awesome-4.3.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png" sizes="192*192">
  <link rel="icon" href="images/favicon.png" type="image/png" sizes="192*192">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body >

  <div class="container"><br>
  <div style="display: flex; justify-content: center;">
  <img src='images/refer.svg' width="150px" height="100%">
  </div><br>
  <div class='center'>
    <span class="blue-text" style='font-size:20px;'><b>EARN MORE BY REFER</b></span><br><br>
    <span class="black-text" style='font-size:16px;'><b>Invite your friends using Referral Code to Earn 5rs when they join first match.Your friends also get 5rs as Signup Bonus!</b></span><br>
  </div>
  <br>
  <div class='center z-depth-2' style='font-size:25px;'>
    <span class="green-text"><b>Your Referral Code</b></span><br>
   <b><img src='images/gift.png' width="8%" height="100%"> <?php echo " $referral_code" ?></b>
  </div>
  <br>
  <div class='center' style='font-size:24px;'>
    <span class="red-text"><b><u>How does it Work?</u></b></span><br>
  </div>
  <br>
  <div class='center'>
    <img src='images/r1.png' width="20%" height="100%">&nbsp&nbsp&nbsp&nbsp
    <img src='images/r.svg' width="15%" height="100%">&nbsp&nbsp&nbsp&nbsp
    <img src='images/r2.svg' width="20%" height="100%">
    <br>
    <span><b>User Registers and Get Rewarded</b></span><br><br>
    <img src='images/r3.svg' width="20%" height="100%">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <img src='images/r.svg' width="15%" height="100%">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <img src='images/r2.svg' width="20%" height="100%">
    <br>
    <span><b>Joins a Match and You Get Rewarded</b></span>
  </div>
  

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