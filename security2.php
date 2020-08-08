<?php
    if(isset($_POST['submit']))
    {
      $q1=$_POST['sec_que_1'];
      $q2=$_POST['sec_que_2'];
      $a1=$_POST['sec_ans_1'];
      $a2=$_POST['sec_ans_2'];
      $uname1=$_POST['uname1'];
      include_once('config.php');
      $query=" UPDATE login set security_que_1='$q1',answer_1='$a1',security_que_2='$q2',answer_2='$a2' where username='$uname1'";
      $sql=mysqli_query($conn,$query);
      if($sql==TRUE)
      {
        session_unset();
        session_destroy();
        $create=TRUE;
        header('Location:login.php?crt=$create');
      }
      else
      {
        echo mysqli_error($conn);
      }
    }
    else
    {
      header('Location:signup.php');
    }

    ?>
       