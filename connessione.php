<?php
$servername = "Spoilers-DB@170.187.185.240";
$username = "'spoilersdb";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>