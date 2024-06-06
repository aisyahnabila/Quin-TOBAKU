<?php
include '../config.php';

$username = "denny";
$email = "admin@examplezs.com";
$password = "dennydaffa";
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO user (username, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $email, $hashed_password);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "User added successfully.";
} else {
    echo "Failed to add user.";
}

$stmt->close();
$conn->close();
