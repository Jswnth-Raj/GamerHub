<?php
session_start();
if($_SESSION['logged']==false || !isset($_SESSION['logged']))
{
    header("location:login.php");
}
?>