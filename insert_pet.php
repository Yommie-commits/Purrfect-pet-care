<?php
include 'db_connect.php';

$name = $_POST['pet_name'];
$type = $_POST['pet_type'];
$owner = $_POST['owner_name'];

$sql = "INSERT INTO pets (pet_name, pet_type, owner_name) VALUES ('$name', '$type', '$owner')";

if ($conn->query($sql) === TRUE) {
    echo "Pet added successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
