<?php
include('conn.php');
$id = $_GET['id'];
$conn->query("DELETE FROM products WHERE id=$id");
header("Location: view-photo.php");
?>