<?php
	include_once('../session.php');
 	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "barev_tv_web_site";

	$conn = mysqli_connect($servername, $username, $password, $dbname);
  if ($conn) {
    
  }else {
    die("Unable to connect to DB");
  }
?>
