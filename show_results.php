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
  <nav class="   indigo darken-4 nav-extended">
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
          <li><a href="mywallet.php" class="titleFont"><h6><img src="images/wallet.png" width="25px"> &nbsp Wallet :<span class="blue-text"><b> &nbsp₹</b><?php echo $bal?> rs &nbsp&nbsp&nbsp&nbsp</span></h6></a></li>

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
  <?php
  if(isset($_POST['show_result']))
{
  $mid=$_POST['m_id'];

  require('config.php');
    if (!$conn)
       {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql="SELECT * FROM `contest` where match_id='$mid'";
      if($result=mysqli_query($conn,$sql))
        {     
          if(mysqli_num_rows($result)>0)
          {
            $row=mysqli_fetch_array($result);
            echo "<div class='col s12 width='100%'>";
            echo "<div class='card z-depth-2'>";
            echo "<span class='card-title black-text'>";
            echo "<div style='font-size:80%;text-align:center;'>&nbsp&nbsp".$row['game_title']."-Match#".$row['match_id']."</div>";
            echo "<div style='text-align:center;'><h6>&nbsp &nbspTime:".$row['time']."</h6></div>";
             echo "<table class='striped centered' style='font-size:48%'>";
            echo "<tr>";
             echo "<td><b>PRIZE POOL</b></td><td> <b>PER KILL</b></td> <td><b>PLAY FOR</b></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><img src='images/cash.png' width='15px'> <b>₹".$row['prize_pool']."rs</b></td><td><img src='images/cash.png' width='15px'><b> ₹".$row['per_kill']."rs</b></td><td><img src='images/cash.png' width='15px'><b> ₹".$row['play_for']."rs</b></td>";
            echo "</tr>";
            echo "</table>";
            echo "</span></div></div>";

          }
        }
          echo "<br>";
          $count=1;
          $sql2="SELECT * FROM `testing` WHERE `match_id`='$mid' AND `rank`=1";
          if($result2=mysqli_query($conn,$sql2))
            {     
              if(mysqli_num_rows($result2)>0)
                {
                      echo "<table class='striped centered z-depth-5'>";
                      echo "<tr class=' indigo darken-4 white-text' style='font-size:16px'><td colspan='4'><b>Winner Winner Chicken Dinner</b></td></tr>";
                      echo "<tr style='font-size:14px'><td><b>#</b></td> <td><b>Player Name</b></td> <td><b>Kills</b></td> <td><b>Winnings</b></td></tr>";
                   while($row2=mysqli_fetch_array($result2))
                    {
                      echo "<tr style='font-size:12px'>";
                      echo "<td>$count</td>";
                      echo "<td>".$row2['userid']."</td>";
                      echo "<td>".$row2['kills']."</td>";
                      echo "<td>₹ ".$row2['totalscore']."</td>";
                      echo "</tr>";
                      $count++;
      
                    }
                    echo "</table><br>";
                }
                else
                {
                  echo "<div class='container center blue-text'><span style='font-size:20px'><b><i>Result not yet released...!<br>Come back later....!</i></b></span></div>";
                }
              
            }

             $sql3="SELECT * FROM `testing` WHERE `match_id`='$mid' AND `rank`=2";
             $count2=1;
                if($result3=mysqli_query($conn,$sql3))
                 {     
                    if(mysqli_num_rows($result3)>0)
                      {
                        echo "<table class='striped centered z-depth-4'>";
                        echo "<tr class=' indigo darken-4 white-text' style='font-size:16px'><td colspan='4'><b>Second Place</b></td></tr>";
                        echo "<tr style='font-size:14px'><td><b>#</b></td> <td><b>Player Name</b></td> <td><b>Kills</b></td> <td><b>Winnings</b></td></tr>";
                        while($row3=mysqli_fetch_array($result3))
                         {
                            echo "<tr style='font-size:12px'>";
                            echo "<td>$count2</td>";
                            echo "<td>".$row3['userid']."</td>";
                            echo "<td>".$row3['kills']."</td>";
                            echo "<td>₹ ".$row3['totalscore']."</td>";
                            echo "</tr>";
                            $count2++;
      
                         }
                          echo "</table><br>"; 
                       }
                }

                $sql4="SELECT * FROM `testing` WHERE `match_id`='$mid' AND `rank`=3";
             $count3=1;
                if($result4=mysqli_query($conn,$sql4))
                 {     
                    if(mysqli_num_rows($result4)>0)
                      {
                        echo "<table class='striped centered z-depth-3'>";
                        echo "<tr class=' indigo darken-4 white-text' style='font-size:16px'><td colspan='4'><b>Third Place</b></td></tr>";
                        echo "<tr style='font-size:14px'><td><b>#</b></td> <td><b>Player Name</b></td> <td><b>Kills</b></td> <td><b>Winnings</b></td></tr>";
                        while($row4=mysqli_fetch_array($result4))
                         {
                            echo "<tr style='font-size:12px'>";
                            echo "<td>$count3</td>";
                            echo "<td>".$row4['userid']."</td>";
                            echo "<td>".$row4['kills']."</td>";
                            echo "<td>₹ ".$row4['totalscore']."</td>";
                            echo "</tr>";
                            $count3++;
      
                         }
                          echo "</table><br>"; 
                       }
                }

               $sql5="SELECT * FROM `testing` WHERE `match_id`='$mid' ORDER BY totalscore DESC";
               $count4=1;
                if($result5=mysqli_query($conn,$sql5))
                 {     
                    if(mysqli_num_rows($result5)>0)
                      {
                        echo "<table class='striped centered z-depth-2'>";
                        echo "<tr class=' indigo darken-4 white-text' style='font-size:16px'><td colspan='4'><b>Full Result</b></td></tr>";
                        echo "<tr style='font-size:14px'><td><b>#</b></td> <td><b>Player Name</b></td> <td><b>Kills</b></td> <td><b>Winnings</b></td></tr>";
                        while($row5=mysqli_fetch_array($result5))
                         {
                            echo "<tr style='font-size:12px'>";
                            echo "<td>$count4</td>";
                            echo "<td>".$row5['userid']."</td>";
                            echo "<td>".$row5['kills']."</td>";
                            echo "<td>₹ ".$row5['totalscore']."</td>";
                            echo "</tr>";
                            $count4++;
      
                         }
                          echo "</table><br>"; 
                       }
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