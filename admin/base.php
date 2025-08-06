<?php
session_start();
include_once('conn.php');
if($_SESSION["username"]) {
?>
<?php
}else echo  header("Location:login.php");
?>