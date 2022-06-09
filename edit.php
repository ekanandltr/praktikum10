<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Tamu</title>
</head>
<body>

	<h2>DATA TAMU</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA TAMU</h3>

	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * FROM guestbook WHERE id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Posted</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="posted" value="<?php echo $d['posted']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="name" value="<?php echo $d['name']; ?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" value="<?php echo $d['email']; ?>"></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><input type="text" name="address" value="<?php echo $d['address']; ?>"></td>
				</tr>
				<tr>
					<td>City</td>
					<td><input type="text" name="city" value="<?php echo $d['city']; ?>"></td>
				</tr>
				<tr>
					<td>Message</td>
					<td><input type="text" name="message" value="<?php echo $d['message']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
</body>
</html>