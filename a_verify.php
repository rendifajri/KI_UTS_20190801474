<?php
$hash = $_GET["pass_en"];//mengambil password yang sudah dienkripsi
if(password_verify($_GET["password"], $hash))//pengecekan password dengan password yang sudah dienkripsi
	echo 'Password is valid!';//memunculkan pesan valid
else//apabila pengecekan gagal
    echo 'Invalid password.';
?>