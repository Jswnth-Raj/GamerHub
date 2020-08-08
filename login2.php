
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Gamer Hub Login</title>
</head>
<body>
<?php 
if(isset($_POST['submit']))
{ 
include 'config.php';
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

     
    $usr =$_POST['username']; 
    $pas =md5($_POST['password']); 
    $sql = mysqli_query($conn,"SELECT username,password FROM login 
        WHERE username='$usr' AND 
        password='$pas' 
        LIMIT 1"); 
    if(mysqli_num_rows($sql) == 1)
    { 
        $row = mysqli_fetch_array($sql); 
        session_start();
        $_SESSION['logged'] = TRUE; 
        $_SESSION['username'] = $usr; 
        header("Location:dashboard.php");
        exit(); 
    }
    else
    { 
        //echo "<span style='color:red'>username or password is incorrect</span>";
        $fail=1;
              header("Location:login.php?fail=$fail");
        exit();
    } 
}
else
{
    header('Location:login.php');
}
?> 
</body>
</html>