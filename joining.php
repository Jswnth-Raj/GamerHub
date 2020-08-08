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
  <title>Joining</title>

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
  <nav class="  green darken-4 nav-extended">
    <div class="nav-wrapper container">
      <div class="container"> <a href="#" class="brand-logo subTitleFont">Join Contest</a></div>
     
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
          <li><a href="mywallet.php" class="titleFont"><h6><img src="images/wallet.png" width="25px"> &nbsp Wallet :<span class="green-text"><b> &nbsp₹</b><?php echo $bal?> rs &nbsp&nbsp&nbsp&nbsp</span></h6></a></li>

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
  <img src="images/joining.jpg" width="100%" height="260px" class="hide-on-large-only">
  <img src="images/joining.jpg" width="100%" height="600px" class="hide-on-med-and-down">
  <br><br>
  <div class="container">
  <?php
  if(isset($_POST['join']))
{
  $mid=$_POST['m_id'];

  require('config.php');
    if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
          }
        $sql="SELECT * FROM `contest` where match_id=$mid";
    if($result=mysqli_query($conn,$sql))
      {     
        if(mysqli_num_rows($result)>0)
          {
            $row=mysqli_fetch_array($result);
              echo "<span class='green-text' style='font-size:17px'><b>".$row['game_title']."-Match#".$row['match_id']."</b></span>";
              echo "<br>";
              echo "<div class='col s12 width='100%'>";
              echo "<div class='card'>";
              echo "<div class='card-content black-text ' style='font-size:15px'>";
              echo "<img src='images/type.png' width='15px'> <b>Type</b>: ".$row['type']."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src='images/version.png' width='15px'> <b>Version</b>: ".$row['version']."<br><img src='images/map.png' width='15px'> <b>Map</b>: ".$row['map']."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src='images/cash.png' width='15px'> <b>Play for</b>: ". $row['play_for']."rs <br><br>";
              echo "<img src='images/timer.png' width='18px'> <b>Match Schedule :</b> ".$row['time'];
              echo "</div> </div> </div>";
              echo "<div class='col s12 width='100%'>";
              echo "<div class='card'>";
              echo "<div class='card-content black-text ' style='font-size:15px'>";
              echo "<span class='green-text'><b>Prize Details....</b></span><br>";
              echo "<b><img src='images/1st.png' width='18px'> Winner&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp-</b> ₹".$row['first_winner']."rs<br>";
              echo "<b><img src='images/2nd.png' width='18px'> Runner up 1-</b> ₹".$row['second_winner']."rs<br>";
              echo "<b><img src='images/3rd.png' width='18px'> Runner up 2-</b> ₹".$row['third_winner']."rs<br>";
              echo "<img src='images/cash.png' width='15px'> <b>&nbspPer Kill&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-</b> ₹".$row['per_kill']."rs<br>";
              echo "----------------------------------------<br>";
              echo "<b> <img src='images/cash.png' width='15px'>&nbsp Total Prize &nbsp&nbsp- </b>₹".$row['prize_pool']."rs<br>";
              echo "</div> </div> </div>";
               $amount=$row['play_for'];
               $match_status=$row['match_status'];
               $count=$row['count'];
               $count_max=$row['max'];
               echo '<br>';
               echo "<a class='waves-effect waves-light btn-small green darken-4 white-text z-depth-3' href='#part'><i class='material-icons left'>assignment</i>My Entries & Partcipants List&nbsp</a>";
               echo '<br>';
           }

               $uname=$_SESSION['username'];
               
               $sql=mysqli_query($conn,"SELECT `username`,`match_id` FROM `participants` WHERE username='$uname' AND match_id='$mid'"); 
               if(mysqli_num_rows($sql) ==0)
                 {
                  if($match_status==1 )
                  {
                    if($count!=$count_max)
                    {
                  ?>
                  <form action="process.php" method="post">
                    <div class="input-field col s6">
                    <input name="userid" id="userid" type="text" class="validate" required autocomplete="off">
                    <label for="userid">PUBG Username</label>
                    </div>
                    <div class="input-field col s6">
                    <input name="charid" id="charid" type="text" class="validate" required autocomplete="off">
                    <label for="charid">PUBG Character ID</label>
                    </div>
                    <input type="hidden" name="amt" id="amt" value="<?php echo $amount?>">
                    <input type="hidden" name="mid" id="mid" value="<?php echo $mid?>"><br>
                    <button class="btn waves-effect waves-light green darken-4" type="submit" name="submit">Join Now
                    <i class="material-icons right">send</i>
                    </button><br>
                    <a href='find.html' style='font-size:11px' target="_blank"><b>HOW TO FIND PUBG USER ID & CHARACTER ID</b></a>
                </form>
                  <?php
                    }
                    else
                    {
                      echo "<br><span class='red-text' style='font-size:20px'><b><i>Contest Filled....</i></b></span>";
                    }
                  }
                  else
                  {
                    echo "<br><span class='red-text' style='font-size:20px'><b><i>Contest Closed....</i></b></span>";
                  }

               }
               else 
               {
                 
                 echo "<br><span style='color:green; font-size:15px'><b><i>.....You are now particpating in this contest.....</i></b></span>";
                 
                $sql=mysqli_query($conn,"SELECT `username`,`match_id` FROM `participants` WHERE username='$uname' AND match_id='$mid'"); 
               if(mysqli_num_rows($sql) >0)
                 {
                  if($match_status==1 )
                  {
                    if($count!=$count_max)
                    {
                  ?>
                  <form action="process.php" method="post">
                    <p><b>Add More....!</b></p>
                    <div class="input-field col s6">
                    <input name="userid" id="userid" type="text" class="validate" required autocomplete="off">
                    <label for="userid">Your's Friend PUBG Username</label>
                    </div>
                    <div class="input-field col s6">
                    <input name="charid" id="charid" type="text" class="validate" required autocomplete="off">
                    <label for="charid">Your's Friend PUBG Character ID</label>
                    </div>
                    <input type="hidden" name="amt" id="amt" value="<?php echo $amount?>">
                    <input type="hidden" name="mid" id="mid" value="<?php echo $mid?>"><br>
                    <button class="btn waves-effect waves-light green darken-4" type="submit" name="submit">Join Now
                    <i class="material-icons right">send</i>
                  </button>
                  </form>
                  <?php
                    }
                    else
                    {
                      echo "<br><span class='red-text' style='font-size:20px'><b><i>Contest Filled....</i></b></span>";
                    }
                  }
                  else
                  {
                    echo "<br><span class='red-text' style='font-size:20px'><b><i>Contest Closed....</i></b></span>";
                  }
                }

                $sql2=mysqli_query($conn,"SELECT `room_id`,`room_pass` FROM `room_details` where match_id='$mid'");
                if(mysqli_num_rows($sql2) > 0)
                  {
                    $row=mysqli_fetch_array($sql2);
                    echo "<div class='col s12 width='100%'>";
                    echo "<div class='card'>";
                    echo "<div class='card-content black-text ' style='font-size:15px'>";
                    echo "<u><span class='green-text'><b>Room Details:</b></u><br>";
                    echo "<b>Room ID:<span class='blue-text'> ".$row['room_id']."</span></b>";
                    echo "<br><b>Room Password:<span class='blue-text'> ".$row['room_pass']."</span></b>";
                    echo "</div></div></div>";
                  }
                  else
                  {
                    echo "<div class='col s12 width='100%'>";
                    echo "<div class='card'>";
                     echo "<div class='card-content' style='font-size:15px'>";
                    echo "<span style='color:blue'><b><i>Room details will be shared before 15 minutes of the match start time....!</i></b></span>";
                    echo "</div></div></div>";
                  }
                }
                ?>
                  <p class='green-text' style='font-size:18px;'><b>About This Contest</b></p>
                  <p style='font-size:12px'>
* <span class='red-text'><b>Note:</b></span><b> If the Contest doesn't filled up to 50% then the contest will be cancelled and your entry fees will be refunded to your Wallet shortly.</b><br> 
* <span class='red-text'><b>Note:</b></span><b> If the Contest doesn' filled up completely then price winnings will be changed.</b><br> 
* No new PUBG Accouts Allowed. PUBG Accounts with Level less than 40 are not allowed to participate. Such participants will be kicked from the room and they will not be given refund.<br> 
* If in anyway you fail to join the room by the contest start time then we aren't responsible for it. Refund in such cases won't be processed. So make sure to join on time.<br> 
* Do not share the Room ID & Password with anyone who has not joined the contest. If you are found doing so, your account may get terminated and all the winnings will be lost.<br> 
* Griefing and Teaming is against the game rules. Any participant found doing so will be disqualified and their prizes will be lost.<br> 
* Room ID and Password will be shared in the app before 15 minutes of contest start time.<br> 
* contest will start after 15 minutes of Sharing Room ID and Password.<br> 
* Make sure to grab ID and Password before the contest Start Time.<br> 
* Make sure you join the contest Room ASAP, before the contest starts.<br> 
* This contest is Paid contest. To participate, you have to pay the entry fee amount. There are total 92 spots available. Join it before all the spots are filled.<br>  
* Please note that the listed entry fee is per individual and not the squad/duo team. <br> 
* Each member of a team (Squad or Duo) has to pay the entry fee and register individually for the contest or tournament.<br> 
* Once you join the contest custom room, do not keep changing your position. If you do so, you may get kicked from the room.<br> 
* Spots are given on the First Come First Basis.<br> 
* Last standing man gets the Chicken Dinner Award.<br> 
* You will be also rewarded for each kill. Check the rewards details above.<br> 
* Do not use Screencast while playing PUBG Mobile contestes at Gamer Hub. <br> 
* Anybody found using Screencast will be banned instantly without any warnings.<br> 
* Use only Mobile Device to Join contest. Do not use any Hacks or Emulators.<br> 
* If anyone found violating these rules then immediate action will be taken and respective accounts may get banned and rewards may be abandoned.<br> 
* If you have any queries then contact us on gamerhubhelpdesk@gmail.com.<br> 
* Also, if you want to arrange Giveaway or Sponsor any such contest then drop us a mail at gamerhubhelpdesk@gmail.com.<br> 
</p>
                <?php
                $sql2="SELECT `userid`, `charid` FROM `participants` WHERE match_id='$mid' and username='$uname'";
                if($result=mysqli_query($conn,$sql2))
                  {     
                    if(mysqli_num_rows($result)>0)
                      {
                        echo "<u><span style='color:green'><b>My Entries List</span></b></u>";
                        $c=1;
                     while($row=mysqli_fetch_array($result))
                        {
                          echo "<br><b>$c. ".$row['userid']."<span>&nbsp &nbsp</span>".$row['charid']."</b>";
                          $c++;
                        }
                       }
                       else
                       {
                        if($match_status==1 && $count!=$count_max)
                        {
                        echo "<b><u><span style='color:green'>My Entries List</span></u></b>";
                        echo "<br><span class='red-text'><b><i>You haven't joined in this match.Go ahead and join now..!</b></i></span><br>";
                        }
                       }
                    }
                    else
                    {
                      echo "something wrong....";
                    }
            $sql="SELECT * FROM `participants` where `match_id`='$mid'";
                if($result=mysqli_query($conn,$sql))
                  {     
                    if(mysqli_num_rows($result)>0)
                      {
                        echo "<br><hr><b><u><span style='color:green' id='part'>Participants list</span></u></b>";
                        $p=1;
                     while($row=mysqli_fetch_array($result))
                        {
                          
                          echo "<br><b>$p. ".$row['userid']."</b>";
                          $p++;
                        }
                      }
                      else
                      {
                        echo "<br><b><u><span style='color:green' id='part'>Participants list</span></u></b>";
                        echo "<br><span class='brown-text'><b><i>No participants yet be the first one....!</span></i></b><br>";
                      }
                  }
            
      }

}

?>
<br><br>
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
  </body>
</html>