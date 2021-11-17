<?php
session_start();
if (!empty($_POST['token'])) {
	if (hash_equals($_SESSION['token'], $_POST['token']))
		echo "validasi token berhasil, nama = ".$_POST['nama'];
	else
		echo "token invalid";
}
else
	echo "token kosong";
?>