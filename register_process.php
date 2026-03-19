<?php
include "db_connect.php";

$username = $_POST['username'];
$password = $_POST['password'];

// HASHING PASSWORD 🔒
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, password) 
        VALUES ('$username', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo "User registered successfully!";
} else {
    echo "Error: " . $conn->error;
}
?>