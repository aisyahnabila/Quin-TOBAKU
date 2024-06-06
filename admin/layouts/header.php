<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Dashboard v.2</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>
<?php
    session_start();

    // Pengecekan apakah pengguna sudah login atau belum
    if (!isset($_SESSION['username'])) {
        header("Location: ../login.php"); // Arahkan ke halaman login jika belum login
        exit();
    }
?>
