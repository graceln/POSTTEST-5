<?php 
include 'connection.php';
$id = $_POST['id'];
$judul = $_POST['judul'];
$tahun = $_POST['tahun'];
$kategori = $_POST['kategori'];
$rating = $_POST['rating'];
 
mysqli_query($connection, "UPDATE movie SET judul='$judul', tahun='$tahun', kategori='$kategori', rating='$rating' WHERE id='$id'");
 
header("location:dashboard.php");
?>