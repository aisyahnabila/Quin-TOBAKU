<?php
include '../../config.php';

if (isset($_POST['save'])) {
    $category_id = $_POST['category_id'];
    $nama = $_POST['nama'];

    // Correct the query to use category_id
    $sql = "UPDATE category SET category_name='$nama' WHERE category_id='$category_id'";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        header('Location: ../index.php?status=success');
    } else {
        header('Location: ../index.php?status=error&message=' . urlencode("Error updating category: " . mysqli_error($conn)));
    }
}

mysqli_close($conn);
