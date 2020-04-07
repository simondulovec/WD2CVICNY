<?php
$servername = "localhost";
$username = "simon";
$password = "simon44695";
$db_name= "sklad";

// Create connection
$conn = new mysqli($servername, $username, $password,$db_name);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	header("Location: er.php");
}
?>
