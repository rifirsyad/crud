<!DOCTYPE html>
<html>
<head>
	<title>Data Username</title>
</head>
<body>
	<center><h2>Data Username</h2>
	<p>[ <a href="username_tambah.php">Tambah Data</a> ]</p></center>
	<table width="100%" border="1" cellpadding="5" cellspacing="0">
		<tr>
			<th width="1%">No.</th>
			<th>Username</th>
			<th>Password</th>
			<th>Nama Lengkap</th>
			<th>E-Mail</th>
			<th>Kelola</th>
		</tr>
		<?php
		include "config.php";
		$sql="SELECT user_nama, user_password, user_namalengkap, user_email FROM user ORDER BY user_namalengkap";
		$hasil = mysqli_query($config, $sql);
		$no=1;
		while ($data=mysqli_fetch_array($hasil)){
		?>
		<tr>
			<td><?php echo $no;?></td>
			<td><?php echo $data['user_nama']; ?></td>
			<td><?php echo $data['user_password']; ?></td>
			<td><?php echo $data['user_namalengkap']?></td>
			<td><?php echo $data['user_email']?></td>
			<td align="center"><a href="username_ubah.php?username=<?php echo $data['user_nama'];?>">Ubah</a> | <a href="username_hapus.php?username=<?php echo $data['user_nama'];?>">Hapus</a></td>
		</tr>
	<?php $no++; }
	echo "</table>"; ?>
</body>
</html>
