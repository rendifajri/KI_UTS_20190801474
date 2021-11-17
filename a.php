<?php
echo password_hash($_GET["password"], PASSWORD_DEFAULT);//enkripsi menggunakan bcrypt pada php
?>