<!DOCTYPE html>
<html>
<head>
	<title>Halaman Ubah Data</title>
</head>
<body>
	<?php
	include "config.php";
	if (empty($_GET['username'])) {header('location: username.php');}
	$user = $_GET['username'];
	$sql = "SELECT * FROM user WHERE user_nama='$user'";
	$hasil = mysqli_query($config, $sql);
	$data = mysqli_fetch_assoc($hasil);
	?>
	<center><h2>Ubah Data Username</h2>
	<p>[ <a href='username.php'>Lihat Data</a> ]</p></center>
	<form method="post" action="username_ubahsimpan.php">
		<table align="center">
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" value="<?php echo $data['user_nama']?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="text" name="password" value="<?php echo $data['user_password']?>"></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="namalengkap" value="<?php echo $data['user_namalengkap']?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email" value="<?php echo $data['user_email']?>"></td>
			</tr>
			<tr>
				<td colspan="3">
					<input type="submit" name="ubah" value="Simpan">
					<input type="reset" value="Batal">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
