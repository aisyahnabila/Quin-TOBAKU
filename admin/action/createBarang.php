<?php
include '../../config.php';

if (isset($_POST['save'])) {
    $nama_barang = mysqli_real_escape_string($conn, $_POST['nama_barang']);
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
    $kategori = mysqli_real_escape_string($conn, $_POST['kategori']);

    // Upload foto
    if ($_FILES['foto']['error'] == 0) {
        $foto = $_FILES['foto'];
        $foto_name = time() . '_' . uniqid() . '.jpg';
        $target_dir = "../../uploads/";
        $target_file = $target_dir . basename($foto_name);

        // Check if file is a JPG image
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        if ($imageFileType == "jpg") {
            $check = getimagesize($foto["tmp_name"]);
            if ($check !== false) {
                if (move_uploaded_file($foto["tmp_name"], $target_file)) {
                    // Insert data ke database
                    $sql = "INSERT INTO item (item_name, item_description, category_id, image) VALUES ('$nama_barang', '$deskripsi', '$kategori', '$foto_name')";
                    if (mysqli_query($conn, $sql)) {
                        header("Location: ../tambah_data_barang.php?success=1");
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            } else {
                echo "File is not an image.";
            }
        } else {
            echo "File is not a JPG image.";
        }
    } else {
        echo "No file uploaded or there was an upload error.";
    }
} else {
    echo "Incomplete form data.";
}

mysqli_close($conn);
