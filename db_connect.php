<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "purrfect_pet_care";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed 😞: " . $conn->connect_error);
} else {
    echo "Database connected successfully 🎉";
}
?>

