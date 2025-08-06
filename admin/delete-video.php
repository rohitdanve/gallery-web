<?php
include('conn.php');
$id = $_GET['id'];
$conn->query("DELETE FROM videos WHERE id=$id");
header("Location: view-video.php");
?>

