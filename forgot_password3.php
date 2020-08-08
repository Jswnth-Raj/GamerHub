<?php
          if(isset($_POST['validate']))
        {
          session_start();
          $u=$_POST['user'];
          $a1=$_POST['a1'];
          $a2=$_POST['a2'];
          $mob=$_POST['mn'];
        require('config.php');
          if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
                }
              $sql="SELECT * FROM `login` WHERE `username`='$u';";
          if($result=mysqli_query($conn,$sql))
            {     
              if(mysqli_num_rows($result)>0)
                {
                $row=mysqli_fetch_array($result);
                if($row['answer_1']==$a1 && $row['answer_2']==$a2 && $row['mobile_number']==$mob)
                {
                  $_SESSION['uname']="$u";
                  header('Location:reset_password.php');
                }
                else
                {
                  $fail=1;
                  header("Location:forgot_password2.php?fail=$fail");
                  exit();


                }

                }
           }
        }
        else
        {
          header('Location:forgot_password.php');
        }


    ?>