<?php
$hash = $_GET["pass_en"];
if (password_verify($_GET["password"], $hash))
	echo 'Password is valid!';
else
    echo 'Invalid password.';
?>