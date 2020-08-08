<?php include 'validate_ses.php';?>
<?php
        if(isset($_POST['submit']))
        {
          $dates=date("d/m/y");
          $n=$_POST['name'];
          $un=$_SESSION['username'];
          $e=$_POST['email'];
          $wn=$_POST['number'];
          $ms=$_POST['msg_sub'];
          $m=$_POST['msg'];

          include 'config.php';
          if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
          }

          $sql=mysqli_query($conn,"INSERT INTO `contactus`(`date`, `username`, `name`, `email`, `whatsapp_number`, `message_subject`, `message`) 
          VALUES ('$dates','$un','$n','$e','$wn','$ms','$m') ");
          if($sql==TRUE)
          {
            header("location:dashboard.php");

          }
          else
          {
            echo mysqli_error($conn);
          }

        }
        else
        {
          header('Location:contactus.php');
        }

        ?>