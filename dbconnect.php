<?php
$server = '127.0.0.1';  // or 'localhost'
$user = 'root';
$pass = '';             // No password since it worked in CLI
$db = 'jfm';
$port = 3307;

$conn = new mysqli($server, $user, $pass, $db, $port);

// Optional: Check if connection succeeded
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
