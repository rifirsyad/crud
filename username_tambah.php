<!DOCTYPE html>
<html>
<head>
	<title>Halaman Tambah Data</title>
</head>
<body>
	<center><h2>Menambah Data Username</h2>
	<p>[ <a href='username.php'>Lihat Data</a> ]</p></center>
	<form method="post" action="username_simpan.php">
		<table align="center">
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="namalengkap"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td colspan="3">
					<input type="submit" name="simpan" value="Simpan">
					<input type="reset" value="Batal">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
