<?php
include "config.php";
if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['namalengkap']) || empty($_POST['email'])) {header('location: username_ubah.php');}
else {
$user = $_POST['username'];
$pass = $_POST['password'];
$nama = $_POST['namalengkap'];
$email = $_POST['email'];
$sql = "UPDATE user SET user_password='$pass', user_namalengkap='$nama', user_email='$email' WHERE user_nama ='$user'";
$hasil = mysqli_query($config, $sql);
if($hasil) {
	echo "<p align='center'>Data berhasil diubah.<br>[ <a href='username.php'>Kembali</a> ]</p>"; }
else {
	echo "<p align='center'>Data gagal diubah.<br>[ <a href='username.php'>Kembali</a> ]</p>"; }
}
?>
