<?php include 'validate_ses.php';?>
<?php
ob_start( 'ob_gzhandler' );
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Redeem UC Points</title>

  <!-- CSS  -->
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/index.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="css/font-awesome-4.3.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png" sizes="192*192">
  <link rel="icon" href="images/favicon.png" type="image/png" sizes="192*192">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>

  <div class="container center">
    <p style='font-size:18px;'> <b class='red-text'><i> Note:</i></b> <b><i> Minimum Redeem Points 800 ¢</i></b></p>
  </div>
  <div class='container'>
    <form action="withdraw_uc.php" method="post">
      <div class='row'>
        <div class="input-field col s12">
          <input id="puid" name="puid" type="text" class="validate" required>
          <label for="puid"><b>Enter Pubg User ID</b></label>
        </div>
      </div>
      <div class='row'>
        <div class="input-field col s12">
          <input id="pcid" name="pcid" type="text" class="validate" required>
          <label for="pcid"><b>Enter Pubg Character ID</b></label>
        </div>
      </div>
      <div class='row'>
        <div class="input-field col s12">
          <input id="debitbal" name="debitbal" type="number" class="validate" required>
          <label for="debitbal"><b>Enter Points</b></label>
        </div>
      </div>
      <button class="btn waves-effect waves-light red darken-4" type="submit" name="submit" id="submit"> Redeem
    <i class="material-icons right">send</i>
  </button>
    </form>
  </div>
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