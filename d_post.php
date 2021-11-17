<?php
session_start();
if (!empty($_POST['token'])) {//pengecekan token dari post
	if (hash_equals($_SESSION['token'], $_POST['token']))//pengecekan token di session dengan token di post
		echo "validasi token berhasil, nama = ".$_POST['nama'];
	else
		echo "token invalid";
}
else
	echo "token kosong";
?>