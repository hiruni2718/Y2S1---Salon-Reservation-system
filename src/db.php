<?php
$serverName = "localhost";
$username = "root";
$password = "123@Ishan";
$dbname = "salon_database";

// Create connection
$conn = new mysqli($serverName, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
