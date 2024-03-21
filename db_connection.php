<?php
$servername = "localhost"; // Change this to your MySQL server hostname
$username = "your_username"; // Change this to your MySQL username
$password = "your_password"; // Change this to your MySQL password
$dbname = "library_management"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optionally, you can set character set and timezone
$conn->set_charset("utf8mb4");
date_default_timezone_set('UTC');
?>
