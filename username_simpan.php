<?php
include "config.php";
if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['namalengkap']) || empty($_POST['email'])) {header('location: username_tambah.php');}
else {
$user = $_POST['username'];
$pass = $_POST['password'];
$nama = $_POST['namalengkap'];
$email = $_POST['email'];
$sql = "INSERT INTO user (user_nama, user_password, user_namalengkap, user_email) VALUES ('$user', '$pass', '$nama', '$email')";
$hasil = mysqli_query($config, $sql);
if($hasil) {
	echo "<p align='center'>Data berhasil ditambahkan.<br>[ <a href='username_tambah.php'>Kembali</a> ]</p>"; }
else {
	echo "<p align='center'>Data gagal ditambahkan.<br>[ <a href='username_tambah.php'>Kembali</a> ]</p>"; }
}
?>
