<?php
$serverName = "mysql_db";
$userName = "root";
$password = "root";
$databaseName= "salon_database";

// Create connection
$conn = new mysqli($serverName, $userName, $password,$databaseName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>