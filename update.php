<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$message = $_POST['message'];

// update data ke database
mysqli_query($koneksi,"UPDATE guestbook SET name='$name', email='$email', address='$address', city='$city', message='$message' WHERE id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>