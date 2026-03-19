<?php
include "db_connect.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // VERIFY PASSWORD 🔍
    if (password_verify($password, $row['password'])) {
        echo "Login successful! 🎉";
    } else {
        echo "Incorrect password!";
    }
} else {
    echo "User not found!";
}
?>