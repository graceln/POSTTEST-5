<?php 
include 'connection.php';
$id = $_GET['id'];
mysqli_query($connection, "DELETE FROM movie WHERE id='$id'");
 
header("location:dashboard.php");
?>