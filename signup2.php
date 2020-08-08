<?php
        include "config.php";
        if(isset($_POST['submit']))
      {
        $fst=$_POST['firstname'];
        $lst=$_POST['lastname'];
        $usr=$_POST['username'];
        $em=$_POST["email"];
        $pass=md5($_POST["password"]);
        $mob=$_POST['mbl'];
        if (!$conn) 
        {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql1 = mysqli_query($conn,"SELECT username FROM login WHERE username='$usr'"); 
            if(mysqli_num_rows($sql1)>0)
            { 
              $fail='Username Already Taken Please enter new Username';
              header("Location:signup.php?fail=$fail");
              exit();
              //echo "<span style='color:red;font-size:13px;'>Username Already Taken Please enter new Username</span>";
            }
        $sql2 = mysqli_query($conn,"SELECT email_id FROM login WHERE email_id='$em'"); 
            if(mysqli_num_rows($sql2)>0)
            { 
              $fail='Email Already linked to another account';
              header("Location:signup.php?fail=$fail");
              exit();
              //echo "<span style='color:red;font-size:13px;'>Email Already linked to another account</span>";
             }
        $sql3 = mysqli_query($conn,"SELECT mobile_number FROM login WHERE mobile_number='$mob'"); 
            if(mysqli_num_rows($sql3) >0)
            { 
              $fail='Mobile Number already linked to another account';
              header("Location:signup.php?fail=$fail");
              exit();
              //echo "<span style='color:red;font-size:13px;'>Mobile Number already linked to another account</span>";
              
            }
        
          $sql = mysqli_query($conn,"INSERT INTO `login`(`first_name`, `last_name`, `username`, `password`,`mobile_number`,`email_id`) VALUES('$fst','$lst','$usr','$pass','$mob','$em')");
          if($sql==TRUE)
          {
            session_start();
            $_SESSION['username']=$usr;
            header("Location:security.php");
          }
          else
          {
            echo "<span style='color:red'>opps.... Something Went wrong try again....</span>";
            echo mysqli_error($conn);
            exit();
          }


        }
        else
        {
          header('Location:signup.php');
        }
      ?>