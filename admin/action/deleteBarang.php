<?php
// koneksi database
include '../../config.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];


// menghapus data dari database
mysqli_query($conn, "delete from item where item_id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:../index.php");
