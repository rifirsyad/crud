<?php
include "config.php";
if (empty($_GET['username'])) {header('location: username.php');}
$user = $_GET['username'];
$sql = "DELETE FROM user WHERE user_nama='$user'";
mysqli_query($config, $sql);
echo "<p align='center'>Data berhasil dihapus.<br>[ <a href='username.php'>Kembali</a> ]</p>";
?>
