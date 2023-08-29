<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbNE = "wwsrilanka";

// Connect to the database and insert visitor data
$conn = @mysqli_connect($host, $user, $pass, $dbNE);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
