<?php
$servername = "localhost";
$username = "root";
$password = "";
$schema="form";

// Create connection
$conn = new mysqli($servername, $username, $password,$schema);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>