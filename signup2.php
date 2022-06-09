<?php

include 'koneksi.php';

$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$homepage = $_POST['homepage'];
$username = $_POST['username'];
$password = $_POST['password'];

// menginput data ke database
mysqli_query($koneksi,"INSERT INTO user VALUES('','$name','$address','$email', '$homepage', '$username', '$password')");


header("location:login.php");

?>