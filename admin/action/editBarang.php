<?php
include '../../config.php';

if (isset($_POST['save'])) {
    $itemId = $_POST['item_id'];
    $nama_barang = $_POST['nama_barang'];
    $deskripsi = $_POST['deskripsi'];
    $kategori = $_POST['kategori'];
    $foto_name = '';

    // Check if a new photo is uploaded
    if ($_FILES['foto']['error'] == UPLOAD_ERR_OK) {
        $foto = $_FILES['foto'];
        $foto_name = time() . '_' . $foto['name'];
        $target_dir = "../../uploads/";
        $target_file = $target_dir . basename($foto_name);

        // Check if file is an actual image
        $check = getimagesize($foto["tmp_name"]);
        if ($check !== false) {
            if (!move_uploaded_file($foto["tmp_name"], $target_file)) {
                echo "Sorry, there was an error uploading your file.";
                exit;
            }
        } else {
            echo "File is not an image.";
            exit;
        }
    }

    // Update item in database
    if (!empty($foto_name)) {
        // Update with new image
        $sql = "UPDATE item SET item_name='$nama_barang', item_description='$deskripsi', category_id='$kategori', image='$foto_name' WHERE item_id='$itemId'";
    } else {
        // Update without changing image
        $sql = "UPDATE item SET item_name='$nama_barang', item_description='$deskripsi', category_id='$kategori' WHERE item_id='$itemId'";
    }

    if (mysqli_query($conn, $sql)) {
        header("Location: ../index.php?success=1");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    echo "Incomplete form data.";
}

mysqli_close($conn);
