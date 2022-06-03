<?php
			// Establishing Connection with Server by passing inputs as a parameter



 //$con = mysqli_connect('localhost','root','','db_barangay') or die(mysqli_error());


 $conn=mysqli_connect("localhost","root","") or die("Could not connect");
mysqli_select_db($conn,"luna") or die("could not connect database");


			date_default_timezone_set("Asia/Manila");


?>
