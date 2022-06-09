<?php

include 'koneksi.php';

$posted = $_POST['posted'];
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$message = $_POST['message'];

// menginput data ke database
mysqli_query($koneksi,"INSERT INTO guestbook VALUES('','$posted', '$name', '$email', '$address', '$city', '$message')");


header("location:index.php");

?>