<?php
			// Establishing Connection with Server by passing inputs as a parameter



//  $con = mysqli_connect('localhost','id18870513_burgos','6WdElkqIGnEK-aqF','id18870513_luna') or die(mysqli_error());


$conn=mysqli_connect('localhost','id18870513_burgos','6WdElkqIGnEK-aqF','id18870513_luna') or die("Could not connect");
mysqli_select_db($conn,'id18870513_luna') or die("could not connect database");


			date_default_timezone_set("Asia/Manila");
// date_default_timezone_set("America/New_York");

?>
