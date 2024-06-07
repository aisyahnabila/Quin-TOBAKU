<?php
include '../../config.php';

$category_id = $_GET['id'];

// Delete items that belong to this category
$delete_items_query = "DELETE FROM item WHERE category_id = '$category_id'";
if (mysqli_query($conn, $delete_items_query)) {
    // Now delete the category
    $delete_category_query = "DELETE FROM category WHERE category_id = '$category_id'";
    if (mysqli_query($conn, $delete_category_query)) {
        header('location: ../index.php?status=success');
    } else {
        header('location: ../index.php?status=error&message=' . urlencode("Error deleting category: " . mysqli_error($conn)));
    }
} else {
    header('location: ../index.php?status=error&message=' . urlencode("Error deleting items: " . mysqli_error($conn)));
}

mysqli_close($conn);
?>
