<?php include 'validate_ses.php';?>
<?php
ob_start( 'ob_gzhandler' );
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>My Transcations</title>

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
  <h6><b class='red-text'>Note:</b> <b>Only Reedem Transcations Displayed Here</b></h6><br>
</div>
  <?php
  include("config.php");
  $uname=$_SESSION['username'];
    $sql="SELECT * FROM `uc_transactions` WHERE `username`='$uname' ORDER BY id DESC";
    if($result=mysqli_query($conn,$sql))
      {     
        if(mysqli_num_rows($result)>0)
          {

           echo "<table class='striped'>"; 

          while($row=mysqli_fetch_array($result))
            {
              
              echo "<tr>";
              echo "<td><b>".substr($row['date'],0,10)."</b></td>";
              echo "<td><b>".$row['reason']."</b></td>";
              echo "<td><b>¢".$row['points']." points</b></td>";
              echo "</tr>";
             
            }
             echo "</table>";
              echo "<br>";
           }
           else
           {
            echo "<div class='container center'><b style='font-size:17px'>Sorry No Transcations Yet...!</b></div>";
           }
        }
        else
        {
          echo mysqli_error($conn);
        }

  ?>
  <br><br><br>
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