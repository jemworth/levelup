<?php
$servername = "localhost";
$username = "level100_db_user";
$password = "Levelup@123";
$dbname = "level100_leveluprealty";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}