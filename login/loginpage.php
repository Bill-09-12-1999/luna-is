<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header ('Location: loginpage1.php');
	}
?>
