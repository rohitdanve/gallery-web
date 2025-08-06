<?php
session_start();
$name=$_SESSION['$username'];
unset($_SESSION['$username']);


if(!isset($_SESSION["username"]))
{
header("Location:login.php");

session_destroy();
clearstatcache();
 }
?>