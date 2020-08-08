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
  <title>Results</title>

  <!-- CSS  -->
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/index.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="css/font-awesome-4.3.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png" sizes="192*192">
  <link rel="icon" href="images/favicon.png" type="image/png" sizes="192*192">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <style type="text/css">
    
  </style>
</head>
<body>
<div id="navbar" class="navbar-fixed scrollspy">
  <nav class=" deep-orange darken-1 nav-extended">
    <div class="nav-wrapper container">
    	<div class="container"> <a href="#" class="brand-logo subTitleFont">Results</a></div>
     
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
      <ul class="right hide-on-med-and-down">
       
        
         <li><a href="#" class="titleFont"><h6><img src="images/web_user.png" width="25px"> &nbsp &nbsp<u><?php echo $_SESSION['username'];?></u></h6></a></li>
        <li><a href="dashboard.php" class="titleFont"><h6>Home</h6></a></li>
        <li><a href="results.php" class="titleFont"><h6>Results</h6></a></li>
        <li><a href="contactus.php" class="titleFont"><h6>Contact Us</h6></a></li>
        <li><a href="mywallet.php" class="titleFont"><h6 style='border-style: solid;'>&nbsp Wallet:&nbsp&nbsp&nbsp<b>₹</b><?php echo $bal?> rs &nbsp</h6></a></li>
        <li><a href="logout.php" class="titleFont"><h6>Logout</h6></a></li>
       
       
      </ul>
      <ul class="right side-nav" id="mobile-demo" style='overflow-y:auto;'>
      	  <li><a href="#"><img src="images/logo.png" width="200px"></a></li>
          <li><a href="#" class="titleFont"><h6 ><img src="images/user.png" width="25px">Hi &nbsp<span class='blue-text'><u><?php echo $_SESSION['username'];?>..!</u></span></h6></a></li>
          <li><a href="dashboard.php" class="titleFont"><h6><img src="images/house.png" width="25px"> &nbsp Home &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h6></a></li>
          <li><a href="results.php" class="titleFont"><h6><img src="images/results.png" width="25px"> &nbsp Result's&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h6></a></li>
          <li><a href="mywallet.php" class="titleFont"><h6><img src="images/wallet.png" width="25px"> &nbsp Wallet :<span class="orange-text"><b> &nbsp₹</b><?php echo $bal?> rs &nbsp&nbsp&nbsp&nbsp</span></h6></a></li>

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
  <img src="images/result.jpg" width="100%" height="230px" class="hide-on-large-only">
  <img src="images/result.jpg" width="100%" height="600px" class="hide-on-med-and-down">
   <?php
    if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
          }
        $sql="SELECT * FROM `contest` where removed=1 ORDER BY `id` DESC";
    if($result=mysqli_query($conn,$sql))
      {     
        if(mysqli_num_rows($result)>0)
          {
            echo "<div class='row'>";
          while($row=mysqli_fetch_array($result))
          {
    echo "<div class='col s12 width='100%'>";
      echo "<div class='card z-depth-5'>";
        echo "<div class='card-content black-text'>";
          echo "<span class='card-title black-text' style='float:left'><img src='images/logo2.png' width='80px'></span>";
          echo "<span style='font-size:95%'>&nbsp&nbsp".$row['game_title']."-Match#".$row['match_id']."</span>";
           echo "<span><h6>&nbsp &nbspTime:".$row['time']."</h6></span>";
            echo "<p><h6>";
            echo "<table class='striped centered'>";
            echo "<tr>";
            echo "<td>PRIZE POOL</td> <td>PER KILL</td> <td>PLAY FOR</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><img src='images/cash.png' width='15px'> ₹".$row['prize_pool']."rs</td><td><img src='images/cash.png' width='15px'> ₹".$row['per_kill']."rs</td><td><img src='images/cash.png' width='15px'> ₹".$row['play_for']."rs</td>";
            echo"</tr>";
            echo "<tr>";
            echo "<td>TYPE</td> <td>VERSION</td> <td>MAP</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><img src='images/type.png' width='16px'> ".$row['type']."</td><td><img src='images/version.png' width='16px'>&nbsp&nbsp".$row['version']."</td><td><img src='images/map.png' width='16px'> ".$row['map']."</td>";
            echo "</tr>";
            $mid=$row['match_id'];
            $uname=$_SESSION['username'];
            $sql=mysqli_query($conn,"SELECT `username`,`match_id` FROM `participants` WHERE username='$uname' AND match_id='$mid'"); 
            if(mysqli_num_rows($sql) >0)
                echo "<tr><td><span style='color:green;font-size:19px'><b>Joined</b?</span></td>";
            else
                echo "<tr><td><span style='color:red;font-size:19px'><b>Not Joined</b></span></td>";
            ?>
            <td colspan="2">
            <form action="show_results.php" method="post">
                <input type="hidden" name="m_id" id="m_id" value="<?php echo $row['match_id']?>">
                <button class="btn waves-effect waves-light btn-small deep-orange darken-1" type="submit" name="show_result" id="show_result">View Result
                <i class="material-icons right">send</i>
                </button>
            </form>
            <?php
            echo "</td></tr>";
            echo "</table>";
            echo "</p>";
          echo "</div>";
        echo "</div>";
      echo "</div>";
    
        }
        echo "</div>";
      }

      else
          {
            echo "<h6><b>
            <img src='images/waiting.png' width='450px' height='450px'>
            <p style='text-align:center;'><br>Results not available right now....!</p>
            <p style='text-align:center;'>Results will be updated shortly.</p>
            <p style='text-align:center;'>Check back in some time.....</p></b></h6>";
          }
}

?>
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