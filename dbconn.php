<?php
$servername = "localhost";
$username = "indo";
$password = "password123";
$db = "sports_event";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully <br> <br>";

?>