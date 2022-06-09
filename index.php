<!DOCTYPE html>
<html>
<head>
	<title>Guest Book</title>
</head>
<body>
<center><h2>GUEST BOOK</h2>
	<br/><br/>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Posted</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Address</th>
			<th>City</th>
			<th>Message</th>
			<th>Action</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from guestbook");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['posted']; ?></td>
				<td><?php echo $d['name']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td><?php echo $d['address']; ?></td>
				<td><?php echo $d['city']; ?></td>
				<td><?php echo $d['message']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
	</table>
</center>
</body>
</html>