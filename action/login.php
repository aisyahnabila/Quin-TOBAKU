<?php
session_start();
include '../config.php';

if (isset($_SESSION['username'])) {
    header("Location: berhasil_login.php");
    exit();
}

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM user WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        // Memeriksa password
        if ($password == $row['password']) {
            $_SESSION['username'] = $row['username'];
            header("Location: ../admin/index.php");
            exit();
        } else {
            echo "<script>alert('Password Anda salah. Silakan coba lagi!')</script>";
            header("Location: ../login.php");
        }
    } else {
        echo "<script>alert('Username tidak ditemukan. Silakan coba lagi!')</script>";
        header("Location: ../login.php");
    }
}
