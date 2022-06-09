<!DOCTYPE html>
<html>
<head>
	<title>Form Guest Book</title>
</head>
<body>
<center>
<h1>Form Guest Book</h1>
<form action="guest.php" method="post">
<table>
	<tr>
		<td>Posted</td>
		<td><input type="date" name="posted"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="name"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email"></td>
	</tr>
	<tr>
		<td>Address</td>
		<td><input type="text" name="address"></td>
	</tr>
	<tr>
		<td>City</td>
		<td><input type="text" name="city"></td>
	</tr>
	<tr>
		<td>Message</td>
		<td><input type="text" name="message"></td>
	</tr>
	<tr>
		<td><input type="submit" name="submit" value="Kirim"></td>
	</tr>
</table>
</form>
</center>
</body>
</html>