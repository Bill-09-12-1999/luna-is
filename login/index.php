<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header ('Location:./main1/home.php');
	}
?>
