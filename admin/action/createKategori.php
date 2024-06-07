<?php
// Koneksi ke database
include '../../config.php';

if (isset($_POST['save'])) {
    // Menangkap data yang dikirim dari form
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);

    // Query untuk menyimpan data kategori
    $sql = "INSERT INTO category (category_name) VALUES ('$nama')";

    // Menyimpan data dan mengecek apakah query berhasil
    if (mysqli_query($conn, $sql)) {
        // Mengalihkan halaman kembali ke tambah_data_kategori.php jika berhasil
        header("Location: ../tambah_data_kategori.php");
    } else {
        echo "<script>alert('Gagal menyimpan data')</script>";
    }
} else {
    echo "<script>alert('Gagal')</script>";
}
