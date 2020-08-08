<?php include 'validate_ses.php';?>
<?php 
require('config.php');
if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
          }
          $n=$_SESSION['username'];
        $sql9="SELECT wallet FROM `login` where username='$n';";
    if($result9=mysqli_query($conn,$sql9))
      {     
        if(mysqli_num_rows($result9)==1)
          {
          $row9=mysqli_fetch_array($result9);
          $bal=$row9['wallet'];
          }
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Dashboard</title>

  <!-- CSS  -->
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/index.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="css/font-awesome-4.3.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png" sizes="192*192">
  <link rel="icon" href="images/favicon.png" type="image/png" sizes="192*192">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <style type="text/css">
    progress 
    {
    border: none;
    width: 150px;
    height: 7px;
    background:red;
    }
    progress::-webkit-progress-value {
      background:red;
    }
    progress::-moz-progress-bar {
      background:red;
    }
  </style>
</head>
<body>
<div id="navbar" class="navbar-fixed scrollspy">
  <nav class="brown darken-4 nav-extended">
    <div class="nav-wrapper container">
    	<div class="container"> <a href="#" class="brand-logo subTitleFont">Contact Us</a></div>
     
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
      <ul class="right hide-on-med-and-down">
       
        
         <li><a href="#" class="titleFont"><h6><img src="images/web_user.png" width="25px"> &nbsp &nbsp<u><?php echo $_SESSION['username'];?></u></h6></a></li>
        <li><a href="dashboard.php" class="titleFont"><h6>Home</h6></a></li>
        <li><a href="results.php" class="titleFont"><h6>Results</h6></a></li>
        <li><a href="contactus.php" class="titleFont"><h6>Contact Us</h6></a></li>
        <li><a href="mywallet.php" class="titleFont"><h6 style='border-style: solid;'>&nbsp Wallet:&nbsp&nbsp&nbsp<b>₹</b><?php echo $bal?> rs &nbsp</h6></a></li>
        <li><a href="logout.php" class="titleFont"><h6>Logout</h6></a></li>
       
       
      </ul>
      <ul class="side-nav" id="mobile-demo" style="overflow-y:auto;">
      	  <li><a href="#"><img src="images/logo.png" width="200px"></a></li>
          <li><a href="#" class="titleFont"><h6 ><img src="images/user.png" width="25px">Hi &nbsp<span class='blue-text'><u><?php echo $_SESSION['username'];?>..!</u></span></h6></a></li>
          <li><a href="dashboard.php" class="titleFont"><h6><img src="images/house.png" width="25px"> &nbsp Home &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h6></a></li>
          <li><a href="results.php" class="titleFont"><h6><img src="images/results.png" width="25px"> &nbsp Result's&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h6></a></li>
          <li><a href="mywallet.php" class="titleFont"><h6><img src="images/wallet.png" width="25px"> &nbsp Wallet :<span class="purple-text"><b> &nbsp₹</b><?php echo $bal?> rs &nbsp&nbsp&nbsp&nbsp</span></h6></a></li>

         <li><a href="addcards.php" class="titleFont"><h6><img src="images/addmoney.png" width="25px"> &nbsp Add Money &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h6></a></li>
         <li><a href="redeemcards.php" class="titleFont"><h6><img src="images/redeem.png" width="25px"> &nbsp Redeem Money &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h6></a></li>
         <li><a href="my_transcations.php" class="titleFont"><h6><img src="images/transcations.png" width="25px"> &nbsp My Transcations &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h6></a></li>
         <li><a href="community.php" class="titleFont"><h6><img src="images/community.png" width="25px"> &nbsp Our Community &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h6></a></li>
        <li><a href="contactus.php" class="titleFont"><h6><img src="images/contact.png" width="25px"> &nbsp Contact Us &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h6></a></li>
        <li><a href="logout.php" class="titleFont"><h6><img src="images/logout.png" width="25px"> &nbsp Logout &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h6></a></li>
        
      </ul>
    </div>     
  </nav>
  </div>
   <img src="images/contactus.jpg" width="100%" height="240px" class="hide-on-large-only">
   <img src="images/contactus.jpg" width="100%" height="600px" class="hide-on-med-and-down">
  <div class="container">
    <div class='row'>
      <form action="contactus2.php" method="post">
      <div class="input-field col s12">
          <input id="name" name="name" type="text" class="validate" required>
          <label for="name"><b>Name</b></label>
        </div>

        <div class="input-field col s12">
          <input id="email" name="email" type="email" class="validate" required>
          <label for="email"><b>Email</b></label>
        </div>

        <div class="input-field col s12">
          <input id="number" name="number" type="number" class="validate" required>
          <label for="number"><b>WhatsApp Number</b></label>
        </div>

        <div class="input-field col s12">
          <input id="msg_sub"  name="msg_sub" type="text" class="validate" required>
          <label for="msg_sub"><b>Message Subject</b></label>
        </div>

        <div class="input-field col s12">
          <input id="msg" name="msg" type="text" class="validate" required>
          <label for="msg"><b>Message</b></label>
        </div>

        <button class="btn waves-effect waves-light brown darken-4" type="submit" name="submit">Send
        <i class="material-icons right">send</i>
        </button>
      </form>
        
    </div>
  
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
      $('.button-collapse').sideNav(
        {
           draggable: true,
           closeOnClick: true,
        });
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
  $(document).ready(function(){
    $('.tabs').tabs();
  });
  </script>
  </body>
</html>