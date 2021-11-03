<?php

session_start();

if (isset($_SESSION['status']) && isset($_SESSION['name']) && isset($_SESSION['user'])) {
	$sessionStatus = $_SESSION['status'];
	$sessionName = $_SESSION['name'];
	$sessionEmail = $_SESSION['user'];
}else{
	$sessionStatus = false;
	$sessionName = "";
	$sessionEmail = "";
}

?>