<?php 
include 'connection.php';
$judul = $_POST['judul'];
$tahun = $_POST['tahun'];
$kategori = $_POST['kategori'];
$rating = $_POST['rating'];

mysqli_query($connection,"INSERT INTO movie VALUES('','$judul','$tahun','$kategori','$rating')");     
   
header("location:dashboard.php");

?>