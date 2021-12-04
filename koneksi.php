<?php

$mysqli = new mysqli("jongkreatif.com", "u5250287_oamaker", "oamaker1234", "u5250287_oamaker");
// Check Connection
if ($mysqli->connect_errno) {
	echo "Gagal menyambungkan ke MYSQL" . $mysqli->connect_errno;
	exit();
}

?>