<?php
$servername = "localhost"; // Replace with your MySQL server hostname
$username = "trang23001";     // Replace with your MySQL username
$password = "AvOY1DsP";     // Replace with your MySQL password
$dbname = "wp_trang23001";       // Replace with the name of your MySQL database

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>