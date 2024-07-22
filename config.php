<?php 
// Database connection details
$host = "localhost";
$user = "root";
$password = '';
$db = "struct";

// Create connection
$conn = new mysqli($host, $user, $password, $db);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
?>