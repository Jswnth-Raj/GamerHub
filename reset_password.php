<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Gamer Hub Reset Password</title>

  <!-- CSS  -->
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/index.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="css/font-awesome-4.3.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png" sizes="192*192">
  <link rel="icon" href="images/favicon.png" type="image/png" sizes="192*192">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Caveat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<style type="text/css">

</style>
<script type="text/javascript">
    function validate()
    {
      var p=document.getElementById('password').value;
      var cp=document.getElementById('cpassword').value;
      if(p==cp)
      {
        return true;
      }
      else
      {
        alert('Password Not Matched');
        document.getElementById('password').value='';
        document.getElementById('cpassword').value='';
        return false;
      }

    }
  </script>
</head>
<body class="black">

<div id="navbar" class="navbar-fixed scrollspy">
  <nav class="black">
    <div class="nav-wrapper container">
        <div class="container"> <a href="#" class="brand-logo subTitleFont"><b>Gamer Hub</b></a></div>
     
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
     
      <ul class="right hide-on-med-and-down">
        
        <li><a href="index.html" class="titleFont"><h6>Home</h6></a></li>
        <li><a href="about_us.html" class="titleFont"><h6>About Us</h6></a></li>
        <li><a href="#legal" class="titleFont"><h6>Legal</h6></a></li>
        <li><a href="contact_us3.php" class="titleFont"><h6>Contact Us</h6></a></li>
        <li><a href="community.php" class="titleFont"><h6>Our Community</h6></a></li>
        <li><a href="terms_and_conditions.html" class="titleFont"><h6>Terms & Conditions</h6></a></li>
        
        
        
       
      </ul>
      <ul class="right side-nav grey darken-4" id="mobile-demo" style='overflow-y:auto'>
          <li class="grey lighten-4"><a href="#"><img src="images/logo.png" width="210px"></a></li>
          <li><a href="index.html" class="titleFont white-text"><h6>Home</h6></a></li>
          <li><a href="signup.php" class="titleFont white-text"><h6>Sign Up</h6></a></li>
          <li><a href="login.php" class="titleFont white-text"><h6>Login</h6></a></li>
          <li><a href="about_us.html" class="titleFont white-text"><h6>About Us</h6></a></li>
          <li><a href="terms_and_conditions.html" class="titleFont white-text"><h6>Terms & Conditions</h6></a></li>
          <li><a href="privacy_policy.html" class="titleFont white-text"><h6>Privacy Policy</h6></a></li>
          <li><a href="fair_play_policy.html" class="titleFont white-text"><h6>Fair Play Policy</h6></a></li>
          <li><a href="refund_policy.html" class="titleFont white-text"><h6>Refund Policy</h6></a></li>
          <li><a href="cancellation_policy.html" class="titleFont white-text"><h6>Cancellation Policy</h6></a></li>
          <li><a href="community.php" class="titleFont white-text"><h6>Our Community</h6></a></li>
         <li><a href="contact_us3.php" class="titleFont white-text"><h6>Contact Us</h6></a></li>
        
      </ul>
    </div>
  </nav>
  </div>

  <div id="index-banner" class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container valign">
        <br><br>
        <h1 class="header center grey-text text-darken-2"><br><br></h1>
        <div class="row center">
            <h5 class="header col s12 light white-text text-darken-2 subTitleFont"><br><br><br><br><br><br>Don't just play the game; Earn from it. </h5>
        </div>
        <div class="row center">
          <a href="#startPosts" class="btn-floating btn-large waves-effect waves-light  deep-orange accent-3 head-link"><i class="fa fa-angle-double-down black-text"></i></a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax hide-on-large-only"><img src="images/wall2.jpg" alt="Unsplashed background img 2" ></div>
    <div class="parallax hide-on-med-and-down"><img src="images/wall2.jpg" alt="Unsplashed background img 2" height="00px"></div>
  </div>
<div class="container" id="startPosts" calss="black">
<br><br>
    <div class="row">
    <div class="col s12">
      <div class="card grey darken-4">
        <div class="card-content  center">
          <span class="card-title white-text">Reset Password</span><br>
          <?php
          if(isset($_SESSION['uname']))
          {
            ?>
          <form action="reset_password2.php" method="post">
            <div class="input-field col s12">
          <input id="password" name="password" type="password" class="validate white-text" required autocomplete="off" minlength="6">
          <label for="password" class="white-text">Enter New Password</label>
        </div>
        <div class="input-field col s12">
          <input type="password" name="cpassword" id="cpassword" autocomplete="off" required minlength="6" class="validate white-text">
          <label for="cpassword" class="white-text">Re-enter New Password</label>
        </div>
          <button class="btn waves-effect waves-light deep-orange accent-3" type="submit" name="submit" onclick="return validate()">Set Password
          <i class="fa fa-pencil" aria-hidden="true"></i>
          </button>
          </form> 
          <?php 
          }
          else
          {
            echo "<span class='red-text' style='font-size:15px'>This Webpage is Not Available Now </span>";
            echo "<br><a href='forgot_password.php'>Click here to go back</a>";
          }    
          ?>
        </div>
        </div>
        </div>
        </div>
      </div>
  </div>
<footer class="page-footer  grey darken-4">
    <div class="container">
            <div class="row">
              <div class="col s12 l4 m10">
                <h4 class="white-text center" style="font-family: 'Satisfy', cursive;">Information</h4>
                <p class="white-text center" style="font-size:17px;">Gamer Hub- Best Platform for Gamer to Earn.Take part in online multiplayer tournaments and win cash prizes, awards. Currently supports PUBG Mobile. Upcoming Games on Gamer Hub:Free Fire, Call of Duty, etc.</p>
           
       </div><!--col-->
              
              
             <div id="categories" class="col offset-l1 s06 left" style="font-size:15px;">
                <h4 class="white-text" style="font-family: 'Satisfy', cursive;">About</h4>
                <ul >
                  <li><a class="grey-text text-lighten-3" href="about_us.html" style="font-size:14px;">About Us</a></li>
                  <li><a class="grey-text text-lighten-3" href="contact_us3.php" style="font-size:14px;">Contact Us</a></li>
                  <li><a class="grey-text text-lighten-3" href="community.php" style="font-size:14px;">Our Community</a></li>
                  <li><a class="grey-text text-lighten-3" href="terms_and_conditions.html" style="font-size:14px;">Terms & Conditions</a></li>
                </ul>
              </div><!--col-->
              
              
              
              <div class="col  s06  right"  style="font-size:15px;">
               <h4 class="white-text " style="font-family: 'Satisfy', cursive;" id="legal">Legal</h4>
                <ul >
                  <li><a class="grey-text text-lighten-3" href="privacy_policy.html" style="font-size:14px;">Privacy Policy</a></li>
                  <li><a class="grey-text text-lighten-3" href="fair_play_policy.html" style="font-size:14px;">Fair Play Policy</a></li>
                  <li><a class="grey-text text-lighten-3" href="refund_policy.html" style="font-size:14px;">Refund Policy</a></li>
                  <li><a class="grey-text text-lighten-3" href="cancellation_policy.html" style="font-size:14px;">Cancellation Policy</a></li>
                </ul>
              </div><!--col-->
              
            </div><!--row-->
            
            <div class="row">
              <div class="col s12">
                
              <a href=""><img src="images/logo.png" width="180px" align="left"></a><br><br>
              <span class="white-text brand-logo subTitleFont" style="font-size: 20px;">&nbsp&nbsp&nbspGamer Hub</span><br>&nbsp;&nbsp;
              <a href="https://www.facebook.com/gamerhubofficialpage/"><i style="font-size: 20px;" class="fa fa-facebook"></i></a> &nbsp;&nbsp;
              <a href="https://www.instagram.com/gamerhub.2020/"><i style="font-size: 20px;" class="fa fa-instagram" aria-hidden="true"></i></a>&nbsp;&nbsp;
              <a href="http://t.me/gamerhub_2020"><i style="font-size: 20px;" class="fa fa-paper-plane" aria-hidden="true"></i></a>

              </div>
              
            </div><!--row-->
          </div><!--conatiner-->
    <div class="footer-copyright">
      <div class="container">
       <p>Copyright © 2020 Gamer Hub. All Rights Reserved</p>
       <br>
      </div>
    </div>
  </footer>



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
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-60673008-2', 'auto');
  ga('send', 'pageview');
</script>
  </body>
</html>
