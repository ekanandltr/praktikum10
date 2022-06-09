<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Beranda</title>
</head>
<style type="text/css">
.container{
	width: 90%;
	margin: 0 auto;
}
.container:after{
	content: " ";
	display: block;
	clear: both;
}
header h1{
	float: left;
	padding: 15px 0px;

}
header ul{
	float: right;

}
header ul li{
	display: inline-block;
}
header ul li a{
	padding: 25px 20px;
	display: inline-block;
}
</style>
<body>
	<header>
		<div class="container">
			<h1><a href="dashboard.php">HALAMAN BERANDA</a></h1>
			<ul>
				<li><a href="guestbook.php">TAMBAH</a></li>
				<li><a href="index.php">LIHAT</a></li>
				<li><a href="login.php">LOG OUT</a></li>
			</ul>
		</div>
	</header>
	<?php
	session_start();
	if($_SESSION['status']!="login"){
		header("location:dashboard.php?pesan=belum_login");
	}
	?>

	<center><h2>Selamat Datang <?php echo $_SESSION['username'];?> pada hari
	<?php
	date_default_timezone_set('Asia/Jakarta');
	$date=new DateTime('now');
	echo $date->format('D, d-m-Y');
?></h2></center>
</body>
</html>
