<?php
session_start();
$_SESSION['token'] = bin2hex(random_bytes(32));//pembuatan token dan memasukan pada session
$token = $_SESSION['token'];
?>
<html>
	<head>
		<title>Form UTS Keamanan Informasi</title>
	</head>
	<body>
		<form action="d_post.php" method="post">
			<input type="hidden" name="token" value="<?=$token?>" />
			<input type="text" name="nama" />
			<input type="submit" name="kirim" value="Submit" />
		</form>
	</body>
</html>